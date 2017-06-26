<?php

  $name = $_POST['name'];

  $con = mysqli_connect('localhost','root','','demo') or die('error:'.mysqli_error($con));
  $query = "INSERT INTO hello VALUES('$name')";
  $send = mysqli_query($con,$query) or die('Error'.mysqli_error($con));
  echo 'Success';
?>
