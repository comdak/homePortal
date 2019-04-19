<div class="modal fade" id="siteDataModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Site Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
          <div class="form-group">
            <label for="title">Page Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php $data->getPageTitle; ?>">
          </div>
          <div class="form-group">
            <label for="content">Page Content</label>
            <textarea class="form-control" rows="5" id="content" name="content"><?php $data->getPageContent; ?></textarea>
          </div>
          <div class="form-group">
            <label for="bg_color">Background Color</label>
            <input type="text" class="form-control" id="bg_color" name="bg_color" value="na" disabled>
          </div>
          <div class="form-group">
            <label for="font_color">Font Color</label>
            <input type="text" class="form-control" id="font_color" name="font_color" value="na" disabled>
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="siteData" name="siteData">
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
