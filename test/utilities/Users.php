<?php
  require './src/Autoload.php';

  use MySimpleORM\BaseClass;

  class Users extends BaseClass {
    public $IDUsers;
    public $username;
    public $description;

    public function __construct() {
      parent::__construct();
      $this->IDUsers = 0;
      $this->username = "";
      $this->description = "";
    }

    public function __destruct() {}
  }
?>