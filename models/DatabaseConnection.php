<?php
  // Model: responsible for managing data and the database connection
  class DatabaseConnectionModel {
    private $dbHost = "localhost";
    private $dbUsername = "username";
    private $dbPassword = "password";
    private $dbDatabase = "php_social_db";
    
    public $dbConnection;

    public function getConnection() {
      $this->dbConnection = null;

      try {
        $this->dbConnection = new PDO("mysql:host={$this->dbHost};dbname={$this->dbDatabase}", $this->dbUsername, $this->dbPassword);
        $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->dbConnection->exec("set names utf8");
      } catch (PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
      }

      return $this->dbConnection;
    }
  }