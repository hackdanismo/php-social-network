<?php
  // This is the View to display data provided by the Controller
  require_once "controller.php";

  $controller = new Controller();
  $status = $controller->checkDatabaseConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Database Connection Status</title>
</head>
<body>
  <h1><?php echo $status; ?></h1>
</body>
</html>