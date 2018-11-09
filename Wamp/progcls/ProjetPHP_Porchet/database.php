<?php


// création de la classe Database
 class Database {
  private  $pdoObject;

	 // le constructeur
  public function __construct() {
	  
   	  // Connexion à la BD
$host     = 'pingouin.heig-vd.ch';
$user     = 'cecile.porchet';
$password = 'Volcome.8';
$db_name  = 'cecile.porchet';
$driver   = 'mysql';
$dsn      = "mysql:host=$host;dbname=$db_name";
try {
    $this->pdoObject = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
	  // si erreur, renvoie une erreur
catch (PDOException $e) {
    die("Oups! Erreur de connexion ! : " . $e->getMessage());
}
  }

	 // retourne la connexion
  public function getPDO() {
    return $this->pdoObject;
  }

	 // retourne la requête 
  public function query($sqlquery) {
    return $this->pdoObject->query($sqlquery);
  }
}
?>





