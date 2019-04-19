<?php
class Auth{

  function loginAuth($pin){
    $hashed = md5($pin); // todo: replace with secure password hashing
    if($hashed == getAuthFromDb()){
      $_SESSION["adult_only"] = $hashed;
    }else{
      session_unset();
      session_destroy();
    }
  }

  function checkAuth($pin){
    $check = getAuthFromDb();
    if($check != $pin){
      session_unset();
      session_destroy();
    }
  }

  function getAuthFromDb(){
    global $conn; // todo: replace this with proper approach
    $sql = "SELECT pin FROM permissions WHERE id = 1";
    if(!$result = $conn->query($sql)){
      echo $conn->error;
    }
    while($row = $result->fetch_assoc()){
      return $row["pin"];
    }
  }

  function changeAuth($pin, $newpin){
    global $conn; // todo: replace this with proper approach
    $hashed = md5($pin);
    $newhash = md5($newpin);
    $now = time();

    if($hashed == getAuthFromDb()){
      $sql = "UPDATE permissions SET pin = {$newhash}, last_changed = {$now} WHERE id = 1";
      if(!$result = $conn->query($sql)){
        echo $conn->error;
      }
    }else{
      setcookie("pinerror", 1, $now + 120);
    }
  }
}
?>
