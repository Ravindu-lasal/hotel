<div
class="modal fade"
id="AddroomModal"
tabindex="-1"
data-bs-backdrop="false">
<div class="modal-dialog modal-xl">
  <form action="/roomsadd" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Extra Large Modal</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <!-- image upload section -->
        <section class="section">
          <div class="row align-items-top">
            <!-- Reusable Card Template -->
            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>

            <div class="col-xxl-2 col-md-2">
              <div class="card">
                <div class="image-container">
                  <img
                    src="{{asset ('admin/assets/img/card.jpg')}}"
                    class="card-img-top"
                    alt="Image"
                  />
                  <button type="button" class="delete-btn d-none">
                    &times;
                  </button>
                </div>
                <div class="card-body text-center">
                  <label class="upload-btn">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <input
                      type="file"
                      class="imageInput"
                      accept="image/*"
                      name="images[]" multiple
                    />
                  </label>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end image upload section -->

        <!-- fill form section -->
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Add hotel details</h5>

                  <!-- Multi Columns Form -->
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="inputName1" class="form-label"
                        >Room Number</label
                      >
                      <input
                        type="number"
                        class="form-control"
                        id="inputName1"
                        name="room_number"
                      />
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label"
                        >Room type</label
                      >
                      <select id="inputState" class="form-select" name="room_type">
                        <option selected>Choose...</option>
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
                      />
                    </div>
                    <div class="col-md-3">
                      <label for="inputState1" class="form-label"
                        >Capacity</label
                      >
                      <select id="inputState1" class="form-select" name="capacity">
                        <option selected value="1">01</option>
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
                        <option selected>Available</option>
                        <option>Occupied</option>
                        <option>Maintenance</option>
                        <option>Reserved</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="Overview" class="form-label">Overview</label>
                      <textarea  class="form-control" id="Overview" style="height: 150px" name="overview"></textarea>
                    </div>
                    <div class="col-6">
                      <label for="AdvanceFacilities" class="form-label">Advance Facilities</label>
                      <textarea
                        class="form-control"
                        id="AdvanceFacilities"
                        style="height: 150px"
                        name="advance_facilities"></textarea>
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
                      ></textarea>
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