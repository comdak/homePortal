<?php
class Buttons{

  function getButtons($adultonly, $showimages){
      global $conn; // todo: replace this with proper approach
      $sql = "SELECT link_url, title, description, image_url FROM links WHERE publish = 1 AND ";
      if($adultonly == 0){
        $sql .= "adult_only = 0";
      }else{
        $sql .= "adult_only = 1";
      }
      if(!$result = $conn->query($sql)){
        echo $conn->error;
      }
      echo "<div class=\"card-deck\">";

      while($row = $result->fetch_assoc()){
        echo "<div class=\"card\" style=\"min-width:200px;\">";
        if($row["image_url"] != "" && $showimages == 1){
          echo "<img class=\"card-img-top\" src=\"img/{$row["image_url"]}\" alt=\"{$row["title"]}\" style=\"width:100%;\">";
        }
        echo "<div class=\"card-body text-center\">";
        echo "<a href=\"{$row["link_url"]}\" class=\"btn btn-primary btn-lg btn-block stretched-link text-light\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{$row["description"]}\">{$row["title"]}</a>";
        echo "</div>";
        echo "</div>";
      }
      echo "</div>";

  }
}
?>
