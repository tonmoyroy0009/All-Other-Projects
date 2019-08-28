<?php 
require_once("config.php");







?>
  <?php 
  $query="select * from users"; 
  $send=mysqli_query($connection,$query);
  while($row = mysqli_fetch_array($send)){
    echo "{$row['name']}";
    echo"<br>";
  }
  ?>