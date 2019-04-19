<?php

class SiteData{

  function setPageTitle($pagetitle){
    global $conn; // todo: replace this with proper approach
    $pagetitle = mysqli_real_escape_string($pagetitle);
    $sql = "UPDATE site_data SET page_title = '{$pagetitle}'";

    if(!$conn->query($sql)){
      echo $conn->error;
    }
  }

  function getPageTitle(){
    global $conn; // todo: replace this with proper approach
    $sql = "SELECT page_title FROM site_data";
    if(!$result = $conn->query($sql)){
      echo $conn->error;
    }
    if($row = $result->fetch_assoc()){
      echo $row["page_title"];
    }
  }

  function setPageContent($pagecontent){
    global $conn; // todo: replace this with proper approach

    $pagecontent = mysqli_real_escape_string($pagecontent);
    $sql = "UPDATE site_data SET page_content = '{$pagecontent}'";

    if(!$conn->query($sql)){
      echo $conn->error;
    }
  }

  function getPageContent(){
    global $conn; // todo: replace this with proper approach
    $sql = "SELECT page_content FROM site_data";
    if(!$result = $conn->query($sql)){
      echo $conn->error;
    }
    if($row = $result->fetch_assoc()){
      echo "<hr>";
      echo "<div class=\"row\">";
      echo "<div class=\"col\">";
      echo $row["page_content"];
      echo "</div>";
      echo "</div>";
    }
  }
}

?>
