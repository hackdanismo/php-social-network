<?php
  // Error status output
  error_reporting(E_ALL);
  // Error status output
  ini_set('display_errors', 1);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "controllers/Users.php";
    
    $controller = new UsersController();
    $email = $_POST["email"];
    $password = $_POST["password"];
    $controller->createUser($email, $password);
    
    echo "User created successfully.";
  }
?>

<form method="post">
  Email: <input type="email" name="email" required>
  Password: <input type="password" name="password" required>
  <button type="submit">Submit</button>
</form>