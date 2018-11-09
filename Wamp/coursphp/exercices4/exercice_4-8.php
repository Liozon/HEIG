<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Exercice 4-8</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<p>
<?php

// Création du jeu
$couleurs = array('coeur', 'carreau', 'trefle', 'pique');
$valeurs = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'as');
$points = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10, 10);
$jeu = array();
$compteur = 0;
foreach ($valeurs as $indice => $valeur) {
    foreach ($couleurs as $couleur) {
        $jeu[$compteur]['valeur'] = $valeur;
        $jeu[$compteur]['couleur'] = $couleur;
        $jeu[$compteur]['points'] = $points[$indice];
        $compteur++;
    }
}

// Mélange des cartes
shuffle($jeu);

// Tirage au hasard
$carte = $jeu[rand(0, count($jeu)-1)];
$pointsCarte = $carte['points'];

// Recupération des points
$points = isset($_GET['points']) ? $_GET['points'] : null;

$pointsCumules = $points+$pointsCarte;


if ($_GET['arreter']) {
    print "Vous avez fait $points points <br />\n";
    print "Si vous aviez continué, vous auriez tiré un " .
          $carte['valeur'] . ' de ' . $carte['couleur'] .
          " et fait $pointsCumules <br />\n";
} elseif ($pointsCumules > 21) {
    // Affichage de la carte tirée
    print 'Dernier tirage: ' . $carte['valeur'] . ' de ' . $carte['couleur'] .
          ' (vaut ' . $carte['points'] . ' points)<br />' . "\n";

    print "Avec $pointsCumules, c'est rapé! <br />\n";
} else {
    // Affichage de la carte tirée
    print 'Tirage: ' . $carte['valeur'] . ' de ' . $carte['couleur'] .
          ' (vaut ' . $carte['points'] . ' points)<br />' . "\n";

    print '<form method="get" action="">' . "\r\n";
    print "\t" . '<input type="text" name="points" value="' . $pointsCumules . '" />' . "\r\n";
    print "\t" . '<input type="submit" name="continuer" value="Continuer" />' . "\r\n";
    print "\t" . '<input type="submit" name="arreter" value="Arreter" />' . "\r\n";
    print '</form>' . "\r\n";
}

?>
</p>

<p>
<a href="?">Recommencer</a>
</p>

</body>
</html>