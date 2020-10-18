<?php
  session_start();
  require "config/config.php";

  $data = new SiteData();
  $buttons = new Buttons();
  $alert = new Alert();

  if($_POST["siteData"]){
    $data->setPageTitle($_POST["title"]);
    $data->setPageContent($_POST["content"]);
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $data->getPageTitle(); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body onload="startTime()">
    <ul class="nav justify-content-end">
      <li class="nav-item my-auto" id="clock"></li>
      <li class="nav-item">
        <a href="#" data-toggle="modal" data-target="#authModal" class="nav-link text-dark">
          <i class="fa fa-user"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" data-toggle="modal" data-target="#addModal" class="nav-link text-dark">
          <i class="fa fa-plus"></i>
        </a>
      </li>
    </li>
    <li class="nav-item">
      <a href="#" data-toggle="modal" data-target="#siteDataModal" class="nav-link text-dark">
        <i class="fa fa-cog"></i>
      </a>
    </li>

    </ul>
    <div class="container" style="padding-top:50px;">
      <?php
        if($_COOKIE["pinerror"]){
          $alert->getAlert("alert-danger", $pinerror);
        }
        if($_SESSION["adult_only"]){
          $buttons->getButtons(1, 0);
        }else{
          $buttons->getButtons(0, 0);
        }
        ?>
        <hr>
        <div class="row">
          <div class="col">
            <?php
              $data->getPageContent();
            ?>
          </div>
        </div>
    </div>
    <?php
      foreach (glob("modals/*.php") as $filename)
      {
        include $filename;
      }
     ?>
  </body>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</html>

<?php $conn->close(); ?>
