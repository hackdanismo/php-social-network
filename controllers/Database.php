<?php
  // Controller: handles the application logic and interacts with Model to get data
  require_once "models/DatabaseConnection.php";

  class DatabaseController {
    private $database;

    public function __construct() {
      $this->database = new DatabaseConnectionModel();
    }

    public function checkDatabaseConnection() {
      if ($this->database->getConnection()) {
        return "Connection is OK";
      } else {
        return "Connection failed";
      }
    }
  }