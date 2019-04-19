<?php
class Alert{
  function getAlert($type, $message){
    echo "<div class=\"alert {$type} alert-dismissible fade show\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          {$message}
          </div>";
  }
}
?>
