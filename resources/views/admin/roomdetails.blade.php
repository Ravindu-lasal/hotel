@extends('admin.layouts.master')

@section('content')
<div class="pagetitle">
    <h1>Room Details</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Room Details</li>
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
      Add Room Deatils
    </button>
  </div>

@include('admin.room.addroom')

  <!-- End Extra Large Modal-->


   <!-- Start room details section-->
      <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>
                      <b>R</b>oom Number
                    </th>
                    <th>Type</th>
                    <th>Price P.N</th>
                    <th>Capacity</th>
                    <th>Status</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Last Update</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($rooms as $room )
                  <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>{{ $room->price_per_night }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>
                      @if ($room->status == 'Available')
                        <span class="badge bg-success">Available</span>
                      @elseif ($room->status == 'Occupied')
                        <span class="badge bg-danger">Occupied</span>
                      @elseif ($room->status == 'Maintenance')
                        <span class="badge bg-warning">Maintenance</span>
                      @elseif ($room->status == 'Reserved')
                        <span class="badge bg-info">Reserved</span>
                      @else
                        <span class="badge bg-secondary">Unknown</span>
                      @endif
                      </td>
                    <td>{{ $room->updated_at }}</td>
                    <td class="text-center align-middle text-nowrap">
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $room->id }}"><i class="bi bi-check-circle"></i> View/Edit</button>
                      <a href="/roomsdelete/{{ $room->id }}" class="btn btn-danger"><i class="bi bi-check-circle"></i> Delete</a>
                    </td>
                  </tr>

                    <div
                      class="modal fade"
                      id="{{ $room->id }}"
                      tabindex="-1"
                      data-bs-backdrop="false">
                      <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <form action="/roomsupdate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Room Update</h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">     
                            <input type="hidden" name="id" value="{{ $room->id }}">                 
                            <!-- image upload section -->
                            <section class="section">
                              @php
                                $roomImages = $images->where('room_id', $room->id);
                                $imageCount = $roomImages->count();
                                $remainingSlots = 6 - $imageCount;
                              @endphp
                            
                              <div class="row align-items-top">

                                <!-- Display Existing Images -->
                                @foreach ($roomImages as $index => $image)
                                
                                  <div class="col-xxl-2 col-md-2">
                                    <div class="card">
                                      <div class="image-container position-relative">
                                        <img src="{{ asset('storage/' . $image->ImageURL) }}" class="card-img-top uploaded-image" alt="Image" />

                                        <!-- Corrected hidden input for Image ID -->
                                        <input type="hidden" name="image_ids[]" value="{{ $image->id }}"/>

                                        <button type="button" class="delete-btn btn btn-danger position-absolute top-0 end-0">&times;</button>
                                      </div>
                                      <div class="card-body text-center">
                                        <label class="upload-btn">
                                          <i class="bi bi-arrow-up-square-fill"></i>
                                          <input type="file" class="imageInput" accept="image/*" name="images[]" />
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                            
                                <!-- Display Empty Placeholders -->
                                @for ($i = 0; $i < $remainingSlots; $i++)
                                  <div class="col-xxl-2 col-md-2">
                                    <div class="card">
                                      <div class="image-container position-relative">
                                        <img src="{{ asset('admin/assets/img/card.jpg') }}" class="card-img-top uploaded-image" alt="Placeholder" />
                                        <button type="button" class="delete-btn btn btn-danger position-absolute top-0 end-0 d-none">&times;</button>
                                      </div>
                                      <div class="card-body text-center">
                                        <label class="upload-btn">
                                          <i class="bi bi-arrow-up-square-fill"></i>
                                          <input type="file" class="imageInput" accept="image/*" name="images[]" />
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                @endfor
                              </div>
                            </section>
                            <!-- end image upload section -->

                            <!-- fill form section -->
                            <section class="section">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Update hotel details</h5>

                                      <!-- Multi Columns Form -->
                                      <div class="row g-3">
                                        <div class="col-md-6">
                                          <label for="inputName1" class="form-label"
                                            >Room Number</label
                                          >
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="inputName1"
                                            name="room_number"
                                            value="{{ $room->room_number }}"
                                          />
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputState" class="form-label"
                                            >Room type</label
                                          >
                                          <select id="inputState" class="form-select" name="room_type">
                                            @if ($room->room_type)
                                              <option value="{{ $room->room_type }}">{{ $room->room_type }}</option>
                                            @endif
                                            <option>Single</option>
                                            <option>Double</option>
                                            <option>Triple</option>
                                            <option>Quad</option>
                                            <option>Queen</option>
                                          </select>
                                        </div>
                                        <div class="col-md-4">
                                          <label for="PricePerNight" class="form-label"
                                            >Price Per Night</label
                                          >
                                          <input
                                            type="number"
                                            class="form-control"
                                            id="PricePerNight"
                                            name="price_per_night"
                                            value="{{ $room->price_per_night }}"
                                          />
                                        </div>
                                        <div class="col-md-3">
                                          <label for="inputState1" class="form-label"
                                            >Capacity</label
                                          >
                                          <select id="inputState1" class="form-select" name="capacity">
                                            @if ($room->capacity)
                                              <option value="{{ $room->capacity }}">0{{ $room->capacity }}</option>
                                            @endif
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                          </select>
                                        </div>
                                        <div class="col-md-5">
                                          <label for="Status" class="form-label"
                                            >Status</label
                                          >
                                          <select id="Status" class="form-select" name="status">
                                            @if ($room->status)
                                              <option value="{{ $room->status }}">{{ $room->status }}</option>
                                            @endif
                                            <option>Available</option>
                                            <option>Occupied</option>
                                            <option>Maintenance</option>
                                            <option>Reserved</option>
                                          </select>
                                        </div>
                                        <div class="col-12">
                                          <label for="Overview" class="form-label">Overview</label>
                                          <textarea  class="form-control" id="Overview" style="height: 150px" name="overview">
                                            {{ $room->overview }}
                                          </textarea>
                                        </div>

                                        <div class="col-6">
                                          <label for="AdvanceFacilities" class="form-label">Advance Facilities</label>
                                          <textarea
                                            class="form-control"
                                            id="AdvanceFacilities"
                                            style="height: 150px"
                                            name="advance_facilities"
                                            >
                                              {{ $room->advance_facilities }}
                                          </textarea>
                                        </div>
                                        <div class="col-6">
                                          <label for="Challenge" class="form-label"
                                            >Challenge</label
                                          >
                                          <textarea
                                            class="form-control"
                                            id="Challenge"
                                            style="height: 150px"
                                            name="challenge"
                                          >
                                            {{ $room->challenge }} 
                                          </textarea>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="wifi"
                                              name="wifi"
                                            />
                                            <label class="form-check-label" for="wifi">
                                              Free Wi-Fi
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="parking"
                                            />
                                            <label class="form-check-label" for="parking">
                                              Parking
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="pool"
                                            />
                                            <label class="form-check-label" for="pool">
                                              Swimming Pool
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="gym"
                                            />
                                            <label class="form-check-label" for="gym">
                                              Gym
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="restaurant"
                                            />
                                            <label
                                              class="form-check-label"
                                              for="restaurant"
                                            >
                                              Restaurant
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="spa"
                                            />
                                            <label class="form-check-label" for="spa">
                                              Spa & Wellness Center
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="airport-shuttle"
                                            />
                                            <label
                                              class="form-check-label"
                                              for="airport-shuttle"
                                            >
                                              Airport Shuttle
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="bar"
                                            />
                                            <label class="form-check-label" for="bar">
                                              Bar
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="pets"
                                            />
                                            <label class="form-check-label" for="pets">
                                              Pet-Friendly
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="ac"
                                            />
                                            <label class="form-check-label" for="ac">
                                              Air Conditioning
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="tv"
                                            />
                                            <label class="form-check-label" for="tv">
                                              Flat-Screen TV
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="minibar"
                                            />
                                            <label class="form-check-label" for="minibar">
                                              Mini-Bar
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="room-service"
                                            />
                                            <label
                                              class="form-check-label"
                                              for="room-service"
                                            >
                                              24/7 Room Service
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="balcony"
                                            />
                                            <label class="form-check-label" for="balcony">
                                              Balcony
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="bathtub"
                                            />
                                            <label class="form-check-label" for="bathtub">
                                              Bathtub
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="coffee-maker"
                                            />
                                            <label
                                              class="form-check-label"
                                              for="coffee-maker"
                                            >
                                              Coffee Maker
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="safe"
                                            />
                                            <label class="form-check-label" for="safe">
                                              In-Room Safe
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="free-toiletries"
                                            />
                                            <label
                                              class="form-check-label"
                                              for="free-toiletries"
                                            >
                                              Free Toiletries
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="hairdryer"
                                            />
                                            <label class="form-check-label" for="hairdryer">
                                              Hairdryer
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="iron"
                                            />
                                            <label class="form-check-label" for="iron">
                                              Iron & Ironing Board
                                            </label>
                                          </div>
                                        </div>

                                        <div class="col-4">
                                          <div class="form-check">
                                            <input
                                              class="form-check-input"
                                              type="checkbox"
                                              id="workspace"
                                            />
                                            <label class="form-check-label" for="workspace">
                                              Work Desk
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- End Multi Columns Form -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!-- End fill form section -->
                          </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>

                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>

                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                   
                 @endforeach      
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End room details section-->
@endsection