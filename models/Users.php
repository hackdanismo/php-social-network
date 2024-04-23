<?php
  class UsersModel {
    private $dbConnection;

    public function __construct($dbConnection) {
      $this->dbConnection = $dbConnection;
    }

    public function addUser($email, $password) {
      $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
      $stmt = $this->dbConnection->prepare($sql);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":password", $password);
      $stmt->execute();
    }
  }