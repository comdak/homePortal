<div class="modal fade" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="form-group">
            <label for="title">Button Title</label>
            <input type="title" class="form-control" id="title">
          </div>
          <div class="form-group">
            <label for="link_url">Link URL</label>
            <input type="link_url" class="form-control" id="link_url">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="description" class="form-control" id="description">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="1">Adult Only
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="1" disabled checked>Publish
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
