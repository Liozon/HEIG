<?php
require('../../../smarty/Smarty.class.php');

date_default_timezone_set('Europe/Zurich');

$tpl = new Smarty;
$tpl->template_dir = './templates/';
$tpl->compile_dir = './templates_c/';
$tpl->config_dir = './configs/';
$tpl->cache_dir = './cache/';

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'heigvd-muggli';
$driver = 'mysql';

$dsn = "$driver:host=$host;dbname=$db_name";

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die ( "Erreur ! : " . $e->getMessage() );
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

if ($action == "ajouterDB") {
    $sql = 'INSERT INTO contacts (titre, nom, prenom, adresse, npa, ville, email, telephone, mobile, commentaire)';
    $sql .= ' VALUES (';
    $sql .= '\'' . $_POST['titre']. '\',';
    $sql .= '\'' . $_POST['nom']. '\',';
    $sql .= '\'' . $_POST['prenom']. '\',';
    $sql .= '\'' . $_POST['adresse']. '\',';
    $sql .= '\'' . $_POST['npa']. '\',';
    $sql .= '\'' . $_POST['ville']. '\',';
    $sql .= '\'' . $_POST['email']. '\',';
    $sql .= '\'' . $_POST['telephone']. '\',';
    $sql .= '\'' . $_POST['mobile']. '\',';
    $sql .= '\'' . $_POST['commentaire']. '\'';
    $sql .= ');';
    $db->exec($sql);
    $action = null;
}

switch($action) {

	case 'ajouter':
        $tpl->display('formulaireAjout.tpl');
	break;

	case 'chercher':
        $tpl->display('formulaireRecherche.tpl');
	break;

    case 'afficherResultatsRecherche' :
        $tri = $_POST['tri'];
        $str = $_POST['str'];
        $sql = "SELECT * FROM contacts WHERE nom LIKE '$str%' ORDER BY $tri";
        $requete = $db->query($sql);
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

        $tpl->assign('nombre_enregistrements', count($resultats));
        $tpl->assign('contacts', $resultats);
        $tpl->display('resultatsRecherche.tpl');
    break;

    default:
    case 'afficher':
        $sql = "SELECT * from contacts";
        $requete = $db->query($sql);
        $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);        
        $tpl->assign('nombre_enregistrements', count($resultats));
        $tpl->assign('contacts', $resultats);
        $tpl->display('afficher.tpl');
    break;
}

$db = NULL;

?>