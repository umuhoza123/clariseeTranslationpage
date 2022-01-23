<?php
  $server = "localhost";
  $user ="root";
  $pass ="";
  $db = "wordstrans_db";

  $conn = mysqli_connect($server, $user, $pass,$db);

  if($conn){
      //echo "Connected"."<br/>";
  } 
  else
  {
      echo "Not connected".mysqli_error($conn);
  }
?>