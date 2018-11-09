<?php
class Database {
  private  $instance;
  private  $DSN = "mysql:host=pingouin.heig-vd.ch; dbname=julien.pittolaz;charset=utf8mb4";

  private  $UserName = "julien.pittolaz";
  private  $Password= "test";
  public function __construct() {
    $this->instance = new PDO($this->DSN, $this->UserName, $this->Password);
  }

  public function getInstance() {
    return $this->instance;
  }
}
