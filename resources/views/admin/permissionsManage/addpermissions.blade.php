<div
class="modal fade"
id="AddpermissionsModal"
tabindex="-1"
data-bs-backdrop="false">
<div class="modal-dialog modal-md">
  
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
    <form action="/permissionsadd" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- fill form section -->
        <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <!-- Multi Columns Form -->
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label for="PermissionName" class="form-label"
                        >Add Permission Name</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="PermissionName"
                        name="PermissionName"
                      />
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