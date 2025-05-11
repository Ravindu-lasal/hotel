<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use App\Models\Images;
use App\Models\Bookings;
use App\Models\Guest;
use Illuminate\Support\Str;


class BookingsController extends Controller
{
    public function Index(Request $request)
    {
        // First, validate all fields except the room capacity check
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'checkin' => 'required|date|after_or_equal:today',
            'checkout' => 'required|date|after:checkin',
            'guests' => 'required|integer|min:1',
        ]);

        // Safely retrieve the room after validation
        $room = Rooms::find($validated['room_id']);

        // Manually validate guest capacity
        if ($validated['guests'] > $room->capacity) {
            return redirect()->back()->withErrors([
                'guests' => 'The number of guests exceeds the room capacity.'
            ])->withInput();
        }

        // Proceed to checkout view
        return view('frontend.checkout', [
            'bookingData' => $validated,
            'room' => $room,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'number_of_guest' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'first_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:100',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:1000',
        ]);

        $guestId = null;

        if (!auth()->check()) {
            $guest = Guest::create([
                'first_name' => $validated['first_name'] ?? '',
                'last_name' => $validated['last_name'] ?? '',
                'email' => $validated['email'] ?? null,
                'phone' => $validated['phone'] ?? null,
            ]);

            $guestId = $guest->id;
        }


        // Create booking
        $booking = Bookings::create([
            'booking_number' => 'BK' . now()->format('Ymd-His') . '-' . ($guestId ?? auth()->id()),
            'user_id' => auth()->check() ? auth()->id() : null,
            'guest_id' => $guestId,
            'room_id' => $validated['room_id'],
            'check_in_date' => $validated['check_in_date'],
            'check_out_date' => $validated['check_out_date'],
            'number_of_guest' => $validated['number_of_guest'] ?? 1,
            'total_price' => $validated['total_price'],
            'booking_status' => 'Pending',
            'message' => $validated['message'] ?? null,
        ]);

        return view('frontend.bookings', [
            'booking' => $booking,
            'guest' => $guestId ? Guest::find($guestId) : null,
        ]);
    }


    public function booked(Request $request)
    {
       $data = $request->only([
            'room_id',
            'check_in_date',
            'check_out_date',
            'number_of_guest',
            'total_price',
            'first_name',
            'last_name',
            'email',
            'phone',
            'message'
        ]);

       return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }


    public function confirm()
    {
        $bookings = Bookings::all();
        $rooms = Rooms::all();
        $guests = Guest::all();
        return view('admin.bookconfirm', compact('bookings', 'rooms', 'guests'));
    }
    

    public function updateconfirm(Request $request)
    {
    $validated = $request->validate([
        'bookingconfirm' => 'required|exists:bookings,booking_id',
        'bookbtn' => 'required|in:Pending,Confirmed,Cancelled',
    ]);

    $booking = Bookings::findOrFail($validated['bookingconfirm']);
    $booking->update(['booking_status' => $validated['bookbtn']]);

    return redirect()->back()->with('success', 'Booking status updated successfully!');
    }


    public function deleteBooking($booking_id)
    {
        $booking = Bookings::findOrFail($booking_id);
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully!');
    }


    public function managebooking()
    {
        $bookings = Bookings::where('booking_status', 'Confirmed')->get();
        $rooms = Rooms::all();
        $guests = Guest::all();

    return view('admin.managebooking', compact('bookings', 'rooms', 'guests'));
    }


    public function managebooked()
    {
        $validated = request()->validate([
            'bookingconfirm' => 'required|exists:bookings,booking_id',
            'room_status' => 'required|in:Available,Occupied,Maintenance,Reserved',
        ]);

        $booking = Bookings::findOrFail($validated['bookingconfirm']);
        $room = Rooms::findOrFail($booking->room_id);
        $room->update(['status' => $validated['room_status']]);
        return redirect()->back()->with('success', 'Room status updated successfully!');
    }
}
