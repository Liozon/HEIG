<?php
// Utilisation de Smarty pour gérer les templates
require '/smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 0;

//listeReview est la page de base du site
$idPage = isset($_REQUEST['id']) ? $_REQUEST['id'] : "listeReview";

// connexion a la BD pingouoin
$dsn = "mysql:host=localhost;dbname=sami.othmane";

try {
    $db = new PDO($dsn, 'sami.othmane', 'test', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
    die ( "Il y a une erreur ! : " . $e->getMessage() );
}

// On gère ici la distribution des templates par rapport aux id des pages,  listeReview est la page d'accueil du site

switch ($idPage) {
	// Le cas par défaut, il affiche la liste ddes reviews de la BD
    case 'listeReview':
	$sql = $db->query("SELECT * FROM reviews ORDER BY date DESC");
	$resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
	$reviews = array();
	foreach ($resultat as $records){
		$reviews[] = array('nom' => $records['nom'], 'avis' => $records['avis'], 'note' => $records['note'], 'date' => $records['date']);
	}
	$smarty->assign("reviews",$reviews);
	$smarty->display("listeReview.tpl");
	break;
	// Affiche la page Ajouter une review
	case 'addReview':  
	$smarty->display("addReview.tpl");
	break;
	// Affiche la page A propos de nous
	case 'aPropos':  
	$smarty->display("aPropos.tpl");
	break;
	// Affiche la page Créer un compte
	case 'compteUser':
	$smarty->display("compteUser.tpl");
	break;
}
// On gère ici le formulaire de la page addReview
if(isset($_REQUEST['nom']) && isset($_REQUEST['note'])){ 
	$nom = $_REQUEST['nom'];
	$avis = $_REQUEST['avis'];
	$note = $_REQUEST['note'];
	$date = $_REQUEST['date'];
	$sql = "INSERT INTO reviews (nom, date, note, avis) VALUES ('$nom', '$date', '$note', '$avis');";
	$controle = $db->query($sql);
	if(!$controle){
		echo "Il y a une erreur";
	}
}

// On gère ici le formulaire de la page compteUser
if(isset($_REQUEST['user']) && isset($_REQUEST['psw'])){ 
	$user = $_REQUEST['user'];
	$password = $_REQUEST['psw'];
	$email = $_REQUEST['email'];
	$pays = $_REQUEST['pays'];
	$npa = $_REQUEST['npa'];
	$birth = $_REQUEST['birth'];
	$sql = "INSERT INTO users (user, password, email, pays, npa, date_naissance) VALUES ('$user', '$password', '$email', '$pays', '$npa', '$birth');";
	$controle = $db->query($sql);
	if(!$controle){
		echo "Il y a une erreur";
	}
}
?>