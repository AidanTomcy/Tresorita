<?php
  use Symfony\Component\Dotenv\Dotenv;
  require '../vendor/autoload.php';

  $dotenv = new Dotenv();
  $dotenv->load(__DIR__.'/.env');

  # Database Connection
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "root");
  define("PASSWORD", $_SERVER['MYSQL_PASSWORD'] ?? "");
  define("DB_NAME", "tresorita");

  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
