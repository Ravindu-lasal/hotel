 <!-- Modal -->
 <div class="modal fade" id="{{ $booked->booking_id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <form action="/managebooked" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Manage Booking  <span>ID: #{{ $booked->booking_id }}</span></h5>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Booking Type</h5>
                  <div class="row g-3">
                    <div class="col-md-3">
                      <label for="CheckInDate" class="form-label">Check In Date</label>
                      <input type="text" class="form-control" id="CheckInDate" value="{{ $booked->check_in_date }}" Disabled>
                    </div>
                    <div class="col-md-3">
                      <label for="CheckOutDate" class="form-label">Check Out Date</label>
                      <input type="text" class="form-control" id="CheckOutDate" value="{{ $booked->check_out_date }}" Disabled>
                    </div>
                    <div class="col-md-2">
                      <label for="inputguest" class="form-label">Guest</label>
                      <input type="number" class="form-control" id="inputguest" value="{{ $booked->number_of_guest }}" Disabled>
                    </div>
                    <div class="col-md-2">
                      <label for="inputTotal" class="form-label">Total Price</label>
                      <input type="number" class="form-control" id="inputTotal" value="{{ $booked->total_price }}" Disabled>
                    </div>
                    <div class="col-md-2">
                      <label for="inputStatus" class="form-label">Room Status</label>
                      <select class="form-select bg-primary text-white" id="inputStatus" name="room_status">
                          <option value="Available" {{ $booked->room->status == 'Available' ? 'selected' : '' }}>Available</option>
                          <option value="Occupied" {{ $booked->room->status == 'Occupied' ? 'selected' : '' }}>Occupied</option>
                          <option value="Maintenance" {{ $booked->room->status == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                          <option value="Reserved" {{ $booked->room->status == 'Reserved' ? 'selected' : '' }}>Reserved</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <!-- User details start -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User Details</h5>

                  <div class="row g-3">
                    @if ($booked->guest_id)
                        <div class="col-md-4">
                            <label for="inputFirstName" class="form-label">Guest First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" value="{{ $booked->guest->first_name }}" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail" class="form-label">Guest Email</label>
                            <input type="email" class="form-control" id="inputEmail" value="{{ $booked->guest->email }}" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPhone" class="form-label">Guest Phone</label>
                            <input type="number" class="form-control" id="inputPhone" value="{{ $booked->guest->phone ?? 'N/A' }}" Disabled>
                        </div>
                    @elseif ($booked->user_id)
                        <div class="col-md-4">
                            <label for="inputName" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="inputName" value="{{ $booked->user->name }}" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail" class="form-label">User Email</label>
                            <input type="email" class="form-control" id="inputEmail" value="{{ $booked->user->email }}" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputPhone" class="form-label">User Phone</label>
                            <input type="number" class="form-control" id="inputPhone" value="{{ $booked->user->phone ?? 'N/A' }}" Disabled>
                        </div>
                    @else
                        <div class="col-md-4">
                            <label for="inputUnknown" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputUnknown" value="Unknown" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputUnknownEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputUnknownEmail" value="Unknown" Disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputUnknownPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputUnknownPhone" value="Unknown" Disabled>
                        </div>
                    @endif
                  </div> 
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Room Details</h5>

                  <div class="row g-3">
                    <div class="col-md-3">
                      <label for="inputNumber" class="form-label">Room Number</label>
                      <input type="number" class="form-control" id="inputNumber" value="{{ $booked->room->room_number }}" Disabled>
                    </div>
                    <div class="col-md-3">
                      <label for="inputName" class="form-label">Room Type</label>
                      <input type="name" class="form-control" id="inputName" value="{{ $booked->room->room_type }}" Disabled>
                    </div>
                    <div class="col-md-3">
                      <label for="inputCapacity" class="form-label"> Guest Capacity</label>
                      <input type="number" class="form-control" id="inputCapacity" value="{{ $booked->room->capacity }}" Disabled>
                    </div>
                    
                  
                                                                                                                        
                  </div> 
                </div>
              </div>
              
            </div>
            <div class="modal-footer">
                
                    <input type="hidden" name="bookingconfirm" value="{{ $booked->booking_id }}">
                
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" name="savechange" class="btn btn-primary">
                      Save changes
                    </button>
                
            </div>
          </form>
        </div>
    </div>
</div>