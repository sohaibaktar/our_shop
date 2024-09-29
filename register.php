<?php
  include 'database_config.php';
  $username = $_POST['username'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (username, name, age, email, password) VALUES ('$username', '$name', '$age', '$email', '$password')";
  $result = mysqli_query($con, $query);

  if($result){
    echo json_encode("Success");
  }
  else{
    echo json_encode("Error");
  }
?>
