<?php
  #Database Connection
  $serverName = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "users";

  $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection failed: " . mysqli_connection_error());
  }
