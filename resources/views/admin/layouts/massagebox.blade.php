 <!-- Bootstrap Modal -->
 <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="messageModalLabel">
            @if(session('success'))
              <i class="bi bi-check-circle text-success"></i> Success
            @elseif(session('error'))
              <i class="bi bi-x-circle text-danger"></i> Error
            @elseif($errors->any())
              <i class="bi bi-exclamation-triangle text-warning"></i> Validation Errors
            @endif
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if(session('success'))
            <p class="text-success">{{ session('success') }}</p>
          @elseif(session('error'))
            <p class="text-danger">{{ session('error') }}</p>
          @elseif($errors->any())
            <ul class="text-danger">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- JavaScript to Show Modal If There's a Message -->
  @if(session('success') || session('error') || $errors->any())
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
        messageModal.show();
      });
    </script>
  @endif