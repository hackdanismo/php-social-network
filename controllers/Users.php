<?php
  require_once "models/DatabaseConnection.php";
  require_once "models/Users.php";

  class UsersController {
    private $usersModel;

    public function __construct() {
      $databaseModel = new DatabaseConnectionModel();
      $databaseConnection = $databaseModel->getConnection();
      $this->usersModel = new UsersModel($databaseConnection);
    }

    public function createUser($email, $password) {
      // Hash the password for added security
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $this->usersModel->addUser($email, $passwordHash);
    }
  }