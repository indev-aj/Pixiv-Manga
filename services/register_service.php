<?php

  include_once('db.php');

  if(isset($_POST['submitRegister'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if($confirm_password != $password) { 
      header("Location: ../register.php?mismatchpassword");
    } else {
      $sql = "INSERT INTO user(email, username, password) 
      VALUES('$username', '$email', '$password')";

      if(mysqli_query($conn, $sql)) {
        header("Location: ../login.php?userRegistered");
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }
  }
  
