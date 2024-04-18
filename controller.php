<?php
  // Controller: handles the application logic and interacts with Model to get data
  require_once "model.php";

  class Controller {
    private $db;

    public function __construct() {
      $this->db = new Model();
    }

    public function checkDatabaseConnection() {
      if ($this->db->getConnection()) {
        return "Connection is OK";
      } else {
        return "Connection failed";
      }
    }
  }