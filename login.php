<?php
  include 'database_config.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);

  if(mysqli_num_rows($result) > 0){
    echo json_encode("Success");
  }
  else{
    echo json_encode("Error");
  }
?>

