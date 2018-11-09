<?php
// Auteur: Julien Muggli

// Indication des informations de Smarty
require('smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = './tpl/templates/';  
$smarty->compile_dir = './tpl/templates_c/'; 
$smarty->config_dir = './tpl/config/';       
$smarty->cache_dir = './tpl/cache/'; 

// Réglage fuseau horaire
date_default_timezone_set('Europe/Zurich');
        
// Chemin du template Smarty
$smarty->display('templates/examen_2.tpl');
            
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
        
        
// Récupération du choix de l'utilisateur
$choix = (isset($_GET['action']) && !empty($_GET['action'])) ? $_GET['action'] : '';
        
// Résultat si choix no 1
        if ($choix == 'choix1') {

            $sql = 'SELECT * FROM population ORDER BY Pays';
            $resultat = $db->query($sql);


            echo "<h2>Choix 1 : Toutes les informations dans un seul tableau. Une ligne par pays. Les pays sont classés par ordre alphabétique. Une dernière ligne indique pour chaque année la somme de la population de l'ensemble des pays</h2>";
            echo "<table border=\"1\">";


            // Affichage du tableau
            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                foreach ($ligne as $valeur) {
                    echo "\t\t<td>$valeur</td>";
                }  
    echo "</tr>";

            }
       echo "</table>";
            
// Résultat si choix no 2
        } else if ($choix == 'choix2') {

            echo "<h2>Choix 2 : Les pays sont répartis entre 4 tableaux en fonction de la population en 2002 : <1 mio habitants, entre 1 et 10 mio, entre 10 et 100 mio, >1 mio habitants.</h2>";

            // Tableau pour <1 mio habitants
            $requete = 'SELECT * FROM population WHERE an_2002 < 1000 ORDER BY an_2002 ASC';
            $resultat = $db->query($requete);


            // Affichage du tableau
            echo ( "<h3>Moins de 1 mio d'habitants</h3>" );
            echo ( "<table border=\"1\">" );
            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                echo ( "\t<tr>" );

                // Parcours par cellule
                foreach ($ligne as $valeur) {
                    echo ( "\t\t<td>$valeur</td>");
                }

                echo "</tr>";
            }
            echo "</table>";

            // Tableau pour entre 1 et 10 mio
            $requete = 'SELECT * FROM population WHERE an_2002 > 1000 AND an_2002 < 10000 ORDER BY an_2002 ASC';
            $resultat = $db->query($requete);


            // Affichage du tableau
            echo "<h3>Entre 1 mio et 10 mio d'habitants</h3>";
            echo "<table border=\"1\">";
            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                echo "\t<tr>";

                // Parcours des lignes
                foreach ($ligne as $valeur) {
                    echo "\t\t<td>$valeur</td>";
                }

                echo "</tr>";
            }
            echo "</table>";

            // Tableau pour entre 10 et 100 mio
            $sql = 'SELECT * FROM population WHERE an_2002 > 10000 AND an_2002 < 100000 ORDER BY an_2002 ASC';
            $resultat = $db->query($sql);


            // Affichage du tableau
            echo "<h3>Entre 10 mio et 100 mio d'habitants</h3>";
            echo "<table border=\"1\">";
            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                echo "\t<tr>";
                foreach ($ligne as $valeur) {
                    echo "\t\t<td>$valeur</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // Tableau pour >1 mio habitants
            $sql = 'SELECT * FROM population WHERE an_2002 < 1000000 ORDER BY an_2002 ASC';
            $resultat = $db->query($sql);


            // Affichage du tableau
            echo "<h3>Plus de 1 mio d'habitants</h3>";
            echo "<table border=\"1\">";
            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                echo "\t<tr>";
                foreach ($ligne as $valeur) {
                    echo "\t\t<td>$valeur</td>";
                }

                echo "</tr>";
            }
            echo "</table>";

// Résultat si choix no 3
        } else if ($choix == 'choix3') {
            $compt = 1988;
echo "<h3>Un tableau par année. Pour chaque année, lister les pays dans l'ordre descendant de la population (du plus au moins peuplé) en n'affichant que le nom et la population de l'année considérée.</h3>";
            echo "<table border=\"1\">";
            
            for ($compt; $compt < 2003; $compt++) {
                echo "<h3>Annee $compt :</h3>";
                echo "<table border=\"1\">";

                $sql = "SELECT * FROM  population ORDER BY an_" . $compt . " DESC";
                $resultat = $db->query($sql);


            while (( $ligne = $resultat->fetch(PDO::FETCH_ASSOC))) {
                foreach ($ligne as $valeur) {
                    echo "\t\t<td>$valeur</td>";
                }  
    echo "</tr>";

            }
       echo "</table>";
                echo "</table>";
            }
        } else {
        }
  // Fin de la connexion à la DB
$db = NULL;
?>