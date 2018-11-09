<?php
    include("database.php");
    include('smarty/libs/Smarty.class.php');
	

	// création du template reservation
    $smarty = new Smarty;
    $database = new Database();
	
	// requête sql sur reservation 
    $database = $database->getPDO();
    $queryReservation = $database->query('SELECT * FROM reservation');
    
	// ajout des réservations sur la page réservation
    $reservations = "";
    while ($reservation = $queryReservation->fetch()) {
        $queryArticle = $database->query('SELECT * FROM article where Id='.$reservation['aid']);
        $article = $queryArticle->fetch();

        $queryClient = $database->query('SELECT * FROM client where id='.$reservation['cid']);
        $client = $queryClient->fetch();

        $reservations .= "<p>".$client['Prenom']." ".$client['Nom']." a reservé l'article suivant :".$article['Description']."</p>";
    }

	// ajout des noms des clients aux réservations 
    $smarty->assign('name', $reservations );

	// fin du template reservation
    $smarty->display('reservation.tpl');
?>

