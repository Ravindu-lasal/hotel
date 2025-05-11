<div
class="modal fade"
id="{{$permission->id}}Modal"
tabindex="-1"
data-bs-backdrop="false">
<div class="modal-dialog modal-md">
  <form action="/permissionsupdate" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ">User Permissions</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">

        <!-- fill form section -->
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Add User Permissions</h5>

                  <!-- Multi Columns Form -->
                  <div class="row g-3">
                    <input type="hidden" name="permissionid" value="{{$permission->id}}">
                    <div class="col-md-12">
                      <label for="editpermission" class="form-label">Room Number</label>
                      <input
                        type="text"
                        class="form-control"
                        id="editpermission"
                        name="PermissionName"
                        value="{{$permission->name}}"
                      />
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