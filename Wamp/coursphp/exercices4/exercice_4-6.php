<?php

// Valeurs possibles pour les couleurs et valeurs de cartes (jeu de 52 cartes)
$couleurs = array('coeur', 'carreau', 'trefle', 'pique');
$valeurs = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'as');

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

// Listing des cartes
foreach ($jeu as $carte) {
    print $carte['valeur'] . ' de ' . $carte['couleur'] . ' vaut ' . $carte['points'] . ' points<br /> ' . "\r\n";
}

?>