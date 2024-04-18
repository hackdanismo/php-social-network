<?php
  // Model: responsible for managing data and the database connection
  class Model {
    private $dbHost = "localhost";
    private $dbUsername = "username";
    private $dbPassword = "password";
    private $dbDatabase = "php_social_db";
    public $conn;

    public function getConnection() {
      $this->conn = null;

      try {
        $this->conn = new PDO("mysql:host={$this->dbHost};dbname={$this->dbDatabase}", $this->dbUsername, $this->dbPassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->exec("set names utf8");
      } catch (PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
      }

      return $this->conn;
    }
  }