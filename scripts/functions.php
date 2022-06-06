<?php

function connectDB(){
  $host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "pay-tracker-db";

  $conn = new mysqli($host, $db_user, $db_password, $db_name);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function loginUser($conn){
  // connect to db
   $username = $_POST['login-username'];
   $password = $_POST['login-password'];

   $sql = "SELECT userID FROM users WHERE userID='$username' AND password='$password'";
   $result = mysqli_query($conn, $sql);



}

 ?>
