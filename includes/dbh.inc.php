<?php
  #Database Connection
  define("SERVER_NAME", "localhost");
  define("DB_USER_NAME", "root");
  define("DB_PASSWORD", "");
  define("DB_NAME", "users");

  $conn = mysqli_connect(SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_NAME);

  if (!$conn) {
    die("Connection failed: " . mysqli_connection_error());
  }
