<?php
$classes = array('Coeur', 'Trèfle', 'Carreau', 'Pique');
$valeurs = array(6, 7, 8, 9, 10, 'Valet', 'Dame', 'Roi', 'As');

$jeu = array();
$compteur = 0;

foreach ($valeurs as $points => $valeur) {
    foreach ($classes as $classe) {
        $jeu["Carte n° " . ($compteur+1)] = array(
            'valeur' => $valeur,
            'couleur' => $classe,
            'points' => $points
        );
        $compteur++;
    }
}

echo '<pre>';
print_r($jeu);
echo '</pre>';

?>