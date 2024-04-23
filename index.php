<?php
  // This is the View to display data provided by the Controller
  require_once "controllers/Database.php";

  $database = new DatabaseController();
  $dbConnectionStatus = $database->checkDatabaseConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Database Connection Status</title>
</head>
<body>
  <h1>Database Connection: <?php echo $dbConnectionStatus; ?></h1>
</body>
</html>