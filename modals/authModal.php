<div class="modal fade" id="authModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Adult Mode</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="form-group">
          <label for="pin">PIN</label>
          <input type="pin" class="form-control form-control-lg" id="pin">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
