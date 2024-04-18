<?php
  //echo "PHP Social Network";

  $dbHost = "localhost";
  $dbUsername = "username";
  $dbPassword = "password";
  $dbDatabase = "php_social_db";

  try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUsername, $dbPassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "++ Database connected successfully ++";
  } catch(PDOException $e) {
    echo "++ Connection failed: " . $e->getMessage();
  }