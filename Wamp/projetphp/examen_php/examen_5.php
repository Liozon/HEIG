<?php
// Auteur: Julien Muggli

// Règle le fuseau horaire par défaut (disponible dès PHP 5.2)
date_default_timezone_set('Europe/Zurich');

// Définition des variables de connexion
$host = 'pingouin.heig-vd.ch';
$user = 'test';
$passwd = 'test';
$db_name = 'exa-php2';
$driver = 'mysql';
$dsn = "mysql:host=$host;dbname=$db_name";
            
// Connexion à la DB
try {
$db = new PDO($dsn, $user, $passwd);
} catch (PDOException $e) {
die( "Erreur de connexion suivante : " . $e->getMessage() );
}

// Vérification si le dossier existe déjà, si non, il le crée
$dossier = '/tmp/examen_php';
if(!is_dir($dossier)){
   mkdir($dossier, 0777, true);
}

// Suppression du fichier si il existe déjà
if( file_exists ($dossier . '/muggli.php')) unlink($dossier . '/muggli.php' ) ;

$fichier = fopen($dossier . '/muggli.php', 'a+');
// Requête SQL
$sql = "SELECT * FROM population WHERE Pays = 'Suisse'";
$requete = $db->query($sql);
$requete = $requete->fetch(PDO::FETCH_ASSOC);

// Construction des données
$texte = '$population["Suisse"] = array(' . "\n";
foreach ($requete as $annee => $population) {
  if($annee != 'Pays') {
    $texte .= "'" . $annee . "' => " . $population . ", \n";
  }
}
$texte .= "); \n\n";
fwrite($fichier, $texte);

// Requête SQL
$sql = "SELECT * FROM population WHERE pays = 'France'";
$requete = $db->query($sql);
$requete = $requete->fetch(PDO::FETCH_ASSOC);

// Construction des données
$texte = '$population["France"] = array(' . "\n";
foreach ($requete as $annee => $population) {
  if($annee != 'Pays') {
    $texte .= "'" . $annee . "' => " . $population . ", \n";
  }
}
$texte .= "); \n\n";
fwrite($fichier, $texte);

// Requête SQL
$sql = "SELECT * FROM population WHERE pays = 'Allemagne'";
$requete = $db->query($sql);
$requete = $requete->fetch(PDO::FETCH_ASSOC);

// Construction des données
$texte = '$population["Allemagne"] = array(' . "\n";
foreach ($requete as $annee => $population) {
  if($annee != 'Pays') {
    $texte .= "'" . $annee . "' => " . $population . ", \n";
  }
}
$texte .= "); \n\n";
fwrite($fichier, $texte);

echo "Le fichier a été créé! Merci de le consulter dans le dossier demandé.";
?>