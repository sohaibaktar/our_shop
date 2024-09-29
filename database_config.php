<?php
  $con = mysqli_connect("localhost", "root", "", "our_shop");

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
