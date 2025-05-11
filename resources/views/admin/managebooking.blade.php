@extends('admin.layouts.master')

@section('content')
<div class="pagetitle">
    <h1>Booking Details</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Booking Details</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <!-- Extra Large Modal -->
  <div class="d-flex justify-content-end mb-3">
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#AddroomModal">
      Booing Management
    </button>
  </div>

  <!-- End Extra Large Modal-->


   <!-- Start booking manage details section-->
      <section class="section">
        <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
    
                  <!-- Table with stripped rows -->
                  <table class="table datatable table-hover">
                    <thead>
                      <tr>
                        <th>Booking Number</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Total price</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booked)
                            <tr>
                                <td>{{ $booked->booking_number }}</td>
                                @if ($booked->guest_id)
                                    <td>{{ $booked->guest->first_name }}</td>
                                    <td>{{ $booked->guest->email }}</td>
                                    <td>{{ $booked->guest->phone ?? 'N/A' }}</td>
                                @elseif ($booked->user_id)
                                    <td>{{ $booked->user->name }}</td>
                                    <td>{{ $booked->user->email }}</td>
                                    <td>{{ $booked->user->phone ?? 'N/A' }}</td>
                                @else
                                    <td>Unknown</td>
                                    <td>Unknown</td>
                                    <td>Unknown</td>
                                @endif
                                <td>{{ \Carbon\Carbon::parse($booked->check_in_date)->format('Y-m-d') }}</td>
                                <td>{{ \Carbon\Carbon::parse($booked->check_out_date)->format('Y-m-d') }}</td>
                                <td>{{ $booked->total_price }}</td>
                                <td>
                                  <div class="justify-content-center align-items-center">
                                      @php
                                          $status = $booked->room->status;
                                      @endphp
                              
                                      @if ($status == 'Available')
                                          <span class="badge bg-success">Available</span>
                                      @elseif ($status == 'Occupied')
                                          <span class="badge bg-warning text-dark">Occupied</span>
                                      @elseif ($status == 'Maintenance')
                                          <span class="badge bg-secondary">Maintenance</span>
                                      @elseif ($status == 'Reserved')
                                          <span class="badge bg-info text-dark">Reserved</span>
                                      @else
                                          <span class="badge bg-dark">Unknown</span>
                                      @endif
                                  </div>
                              </td>
                              
                                
                                <td>
                                    <div class="d-flex justify-content-center align-items-center gap-3">
                                        <!-- Edit button -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $booked->booking_id }}">
                                            <i class="bi bi-pencil-square fs-3 text-primary"></i>
                                        </a>
                                
                                        <!-- Delete button -->
                                        <a href="deleteBooking/{{ $booked->booking_id }} " onclick="return confirm('Are you sure you want to Delete this Booking?')">
                                            <i class="bi bi-x-square fs-4 text-danger"></i>
                                        </a>
                                    </div>
                                </td>
                                
                                @include('admin.booking.managemodel')
                                
                            </tr>
                        @endforeach
                    </tbody>
                    
                  </table>
                  <!-- End Table with stripped rows -->
    
                </div>
              </div>
    
            </div>
          </div>
    </section>
    <!-- End booking manage details section-->
@endsection