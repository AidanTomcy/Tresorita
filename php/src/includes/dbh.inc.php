<?php
  # Database Connection
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "root");
  define("PASSWORD", "");
  define("DB_NAME", "tresorita");

  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }