<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\RoomController;
use App\Http\Controllers\admin\BookingsController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\UserController;
use App\Models\Rooms;
use App\Models\Images;
use App\Models\Bookings;
use App\Models\Guest;
use App\Http\Middleware\UserManageRoles;





Route::get('/', function () {
    return view('frontend.home');
});

Route::middleware([UserManageRoles::class])->group(function () {
    Route::get('/rooms', function () {
        $rooms = Rooms::with('images')
            ->where('status', 'Available')
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        return view('frontend.rooms', compact('rooms'));
    });
});



Route::get('/roomshow/{id}', function($id){
    $room = Rooms::with('images')->findOrFail($id); // Eager load images with the specific room
    return view('frontend.roomdetails', compact('room'));
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(RoomController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/roomdetails', 'Index')->name('rooms.index');
    Route::post('/roomsadd', 'Store')->name('rooms.store');
    Route::post('/roomsupdate', 'Update')->name('rooms.update');
    Route::get('/roomsdelete/{id}', 'Destroy')->name('rooms.destroy');
});


Route::controller(BookingsController::class)->group(function () {
    Route::get('/check', 'Index')->name('check.index');  
    Route::post('/bookings', 'store')->name('bookings.store'); 
    Route::get('/bookconfirm', 'confirm')->name('bookconfirm.confirm');
    Route::post('/updateconfirm', 'updateconfirm')->name('updateconfirm.confirm');
    Route::get('/deleteBooking/{booking_id}', 'deleteBooking')->name('deleteBooking');
    Route::get('/managebooking', 'managebooking')->name('managebooking.manage');
    Route::post('/managebooked', 'managebooked')->name('managebooked.manage');
});

Route::controller(BookingsController::class)->group(function () {
    Route::get('/check', 'Index')->name('check.index');
});


Route::controller(PermissionController::class)->group(function () {
    Route::get('/permissionsindex', 'Index')->name('permissions.index');
    Route::post('/permissionsadd', 'Store')->name('permissions.store');
    Route::post('/permissionsupdate', 'Update')->name('permissions.update');
    Route::get('/permissionsdelete/{id}', 'Destroy')->middleware(['role:super-admin'])->name('permissions.destroy');
});


Route::controller(RolesController::class)->group(function () {
    Route::get('/rolesindex', 'Index')->name('permissions.index');
    Route::post('/rolesadd', 'Store')->name('permissions.store');
    Route::post('/rolesupdate', 'Update')->name('permissions.update');
    Route::get('/rolesdelete/{id}', 'Destroy')->middleware(['role:super-admin'])->name('permissions.destroy');
    Route::get('/permissionsassign/{id}', 'AssignPermission')->name('permissions.AssignPermission');
    Route::put('givepermissionsassign', 'givepermissionsassign')->name('permissions.givepermissionsassign');
});


Route::controller(UserController::class)->middleware(['auth', 'verified','role:super-admin|users'])->group(function () {
    Route::get('/userindex', 'Index')->name('user.index');
    Route::post('/useradd', 'Store')->name('user.store');
    Route::post('/userupdate', 'Update')->name('user.update');
    Route::get('/userdelete/{id}', 'Destroy')->middleware(['role:super-admin'])->name('user.destroy');
});








require __DIR__.'/auth.php';
