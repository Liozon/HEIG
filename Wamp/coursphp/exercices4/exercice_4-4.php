<?php

$couleurs = array('coeur', 'carreau', 'trefle', 'pique');
$valeurs = array(6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'as');

$jeu = array();
$compteur = 0;
foreach ($valeurs as $points => $valeur) {
    foreach ($couleurs as $couleur) {
        $jeu[$compteur]['valeur'] = $valeur;
        $jeu[$compteur]['couleur'] = $couleur;
        $jeu[$compteur]['points'] = $points;
        $compteur++;
    }
}

// Mélange du jeu
for ($i=0 ; $i<=3 ; $i++) {
    shuffle($jeu);
}

// Listing des cartes
foreach ($jeu as $carte) {
    print $carte['valeur'] . ' de ' . $carte['couleur'] . ' vaut ' . $carte['points'] . ' points<br /> ' . "\r\n";
}

?>