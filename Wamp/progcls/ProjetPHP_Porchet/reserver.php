<?php
	// connexion à la base de données 
    include("database.php");
    $database = new Database();
    $database = $database->getPDO();

	// retourne les valeurs des clients et des articles
    $cid = intval($_POST['cid']);
    $aid = intval($_POST['aid']);

	// requête sql
    $queryReservation = $database->query('INSERT INTO reservation VALUES ('.$cid.','.$aid.');');
    $queryReservation->fetch();
?>