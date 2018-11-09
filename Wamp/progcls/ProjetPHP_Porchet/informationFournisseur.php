<?php
	// connexion à la base de données
    include("database.php");
    $database = new Database();
    $database = $database->getPDO();

    // requête sql pour les fournisseurs.
    $fid = intval($_POST['fid']);
    $requeteFournisseur = $database->query('SELECT * FROM fournisseur WHERE id='.$fid);
    $fournisseur = $requeteFournisseur->fetch();

	// affichage des fournisseurs
    echo json_encode($fournisseur);
?>