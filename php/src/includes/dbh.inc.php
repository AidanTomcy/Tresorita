<?php
  #Database Connection
  $host = "db";
  $user = "root";
  $password = "";

  $conn = new mysqli($host, $user, $pass);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
