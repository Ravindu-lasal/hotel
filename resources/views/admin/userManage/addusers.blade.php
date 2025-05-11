<div
class="modal fade"
id="AddpermissionsModal"
tabindex="-1"
data-bs-backdrop="true">
<div class="modal-dialog modal-md">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ">User Add</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <form action="/useradd" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- fill form section -->
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <!-- Multi Columns Form -->
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label for="userName" class="form-label"
                        >Add User Name</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="userName"
                        name="userName"
                        placeholder="Enter User Name"
                      />
                    </div>

                     <div class="col-md-12">
                      <label for="inputemail" class="form-label"
                        >Email</label
                      >
                      <input
                        type="email"
                        class="form-control"
                        id="inputemail"
                        name="inputemail"
                        placeholder="EMAIL"
                      />
                    </div>

                     <div class="col-md-12">
                      <label for="inputPassword" class="form-label"
                        >Password</label
                      >
                      <input
                        type="password"
                        class="form-control"
                        id="inputPassword"
                        name="inputPassword"
                        placeholder="PASSWORD"
                      />
                    </div>

                    <div class="col-md-12">
                      <label for="inputState" class="form-label"
                        >Select User Roles</label
                      >
                      <select id="inputState" class="form-select" name="roles[]">
                        <option selected>Choose...</option>
                        @foreach ($roles as $role )
                          <option value="{{$role}}">{{$role}}</option> 
                        @endforeach
                      </select>
                        
                    </div>
                    
                  </div>
                  <!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
        <!-- End fill form section -->
      </div>
      <div class="modal-footer">
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