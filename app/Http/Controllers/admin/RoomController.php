<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Images;

class RoomController extends Controller
{
    public function Index()
    {
        $rooms = Rooms::all();
        $images = Images::all();
        return view('admin.roomdetails', compact('rooms'),compact('images'));
    }

    public function Store(Request $request)
    {
        $validatedData = $request->validate([
            'room_number' => 'required|unique:rooms,room_number',
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'capacity' => 'required|integer',
            'overview' => 'nullable|string',
            'advance_facilities' => 'nullable|string',
            'challenge' => 'nullable|string',
            'is_accessible' => 'boolean',
            'status' => 'required|in:Available,Occupied,Maintenance,Reserved',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate images
        ]);

        // Create a new room and get the instance
        $room = Rooms::create([
            'room_number' => $validatedData['room_number'],
            'room_type' => $validatedData['room_type'],
            'price_per_night' => $validatedData['price_per_night'],
            'capacity' => $validatedData['capacity'],
            'overview' => $validatedData['overview'],
            'advance_facilities' => $validatedData['advance_facilities'],
            'challenge' => $validatedData['challenge'],
            'is_accessible' => $validatedData['is_accessible'] ?? false,
            'status' => $validatedData['status']
            
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            // Get the last image order for this room
            $lastImage = Images::where('room_id', $room->id)->orderBy('ImageOrder', 'desc')->first();
            $order = $lastImage ? $lastImage->ImageOrder : 0; // Start from last order or 0

            foreach ($images as $image) {
                $path = $image->store('room_images', 'public');
                $order++; // Increment the order for each new image

                // Store the image with the correct order
                Images::create([
                    'room_id' => $room->id,
                    'ImageURL' => $path,
                    'ImageOrder' => $order
                ]);
            }
        }

        return redirect()->back()->with('success', 'Room and images uploaded successfully!');
    }




    public function Update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|exists:rooms,id',
            'room_number' => 'required',
            'room_type' => 'required',
            'price_per_night' => 'required|numeric',
            'capacity' => 'required|integer',
            'overview' => 'nullable|string',
            'advance_facilities' => 'nullable|string',
            'challenge' => 'nullable|string',
            'is_accessible' => 'boolean',
            'status' => 'required|in:Available,Occupied,Maintenance,Reserved',
            'image_ids' => 'nullable|array', 
            'image_ids.*' => 'exists:images,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate images
        ]);


        // Update the room details
        $room = Rooms::find($validatedData['id']);
        $room->room_number = $validatedData['room_number'];
        $room->room_type = $validatedData['room_type'];
        $room->price_per_night = $validatedData['price_per_night'];
        $room->capacity = $validatedData['capacity'];
        $room->overview = $validatedData['overview'];
        $room->advance_facilities = $validatedData['advance_facilities'];
        $room->challenge = $validatedData['challenge'];
        $room->is_accessible = $validatedData['is_accessible'] ?? false;
        $room->status = $validatedData['status'];
        $room->save();


        // Handle image updates (updating existing images)
        if ($request->hasFile('images') && is_array($request->image_ids) && count($request->image_ids) === count($request->file('images'))) {
            foreach ($request->file('images') as $index => $image) {
                if (!isset($request->image_ids[$index])) {
                    continue;
                }

                $imageRecord = Images::where('id', $request->image_ids[$index])->first();

                if ($imageRecord) {
                    // Delete old image from storage
                    \Storage::disk('public')->delete($imageRecord->ImageURL);

                    // Upload new image
                    $newPath = $image->store('room_images', 'public');

                    // Update database with new image path
                    $imageRecord->update(['ImageURL' => $newPath]);
                }
            }
        }

        // Handle new images (adding new images)
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            

            // Get the last image order for this room
            $lastImage = Images::where('room_id', $room->id)->orderBy('ImageOrder', 'desc')->first();
            $order = $lastImage ? $lastImage->ImageOrder : 0; // Start from last order or 0

            foreach ($images as $image) {
                $path = $image->store('room_images', 'public');
                $order++; // Increment the order for each new image

                // Store the image with the correct order
                Images::create([
                    'room_id' => $validatedData['id'],
                    'ImageURL' => $path, // Corrected path storage
                    'ImageOrder' => $order
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Room and images updated successfully!');
    }



    public function Destroy($id){
        $room = Rooms::find($id);
        if ($room) {
            // Delete associated images from storage
            $images = Images::where('room_id', $id)->get();
            foreach ($images as $image) {
                \Storage::disk('public')->delete($image->ImageURL);
                $image->delete();
            }

            // Delete the room
            $room->delete();

            return redirect()->back()->with('success', 'Room deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Room not found!');
        }
    }
    
}
