<?php
// Auteur: Julien Muggli

$random = rand(9000,13000);

    echo 'Nombre aléatoire entre 9000 et 13000: ' . $random;

    echo "<br>";

    if(($random%2) == 0){
    	echo $random. ' est un nombre pair';
    } else {
    	echo $random. ' est un nombre impair';
    }
?>