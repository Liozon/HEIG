<?php

class Database {

  private $host = 'pingouin.heig-vd.ch';
  private $dbname = 'julien.pittolaz';
  private $user = 'julien.pittolaz';
  private $password = 'test';
  public  $instance;

  public function __construct() {
      $dbh = new PDO('mysql:host=' . $this->host .';charset=utf8mb4;dbname=' . $this->dbname, $this->user, $this->password);
      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      $this->instance = $dbh;
  }

  public function getInstance() {
    return $this->instance;
  }

}
