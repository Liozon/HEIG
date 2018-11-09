<?php
    $titre = 'Articles';
    include("database.php");
    include('smarty/libs/Smarty.class.php');

    // on crée l'objet database
    $database = new Database();
    $smarty = new Smarty;

    $database = $database->getPDO();

    // on requete les articles
    $queryArticles = $database->query('SELECT * FROM article');

    // on requete les clients
    $queryClient = $database->query('SELECT * FROM client');
    
	// on insère les clients
    $options = "";
    while ($client = $queryClient->fetch()) {
        $options .= '<option value="'.$client['id'].'">'.$client['Nom'].' '.$client['Prenom'].'</option>';
    }

	// création du tableau 
    $tableau = "";
    while ($article = $queryArticles->fetch()) {
        $genre = $article['Genre'];
        $prixInitial = $article['PrixInitial'];
        $prixRabais = $article['PrixRabais'];
        $pourcentRabais= $article['PourcentRabais'];
        $datePeremption = $article['DatePeremption'];
        $description = $article['Description'];
        $fournisseur = $article['IdFournisseur'];
        $articleID = $article['Id'];
		 
		// concaténation du tableau
        $tableau .= "<tr>
            <th>$genre</th>
            <th class='alignRight'>$prixInitial</th>
            <th class='alignRight'>$prixRabais</th>
            <th>$pourcentRabais</th>
            <th>$datePeremption</th>
            <th>$description</th>
	        <th><button fid='$fournisseur' type='button' class='btn btn-success buttonInfoFournisseur'><i class='fa fa-info-circle fa-fw'></i>&nbsp;Info</button></th>
            <th><button aid='$articleID' type='button' class='btn btn-primary buttonReserver'><i class='fa fa-shopping-cart fa-fw'></i>&nbsp;Réserver</button></th>
        </tr>";
    }

	// ajout des personnes
    $smarty->assign('options', $options );

	// ajout des articles au tableau 
    $smarty->assign('tableau', $tableau );

	// fin de smarty
    $smarty->display('index.tpl');
?>