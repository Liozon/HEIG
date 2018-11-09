<?php
// Auteur: Julien Muggli
    $aujourdhui = new DateTime();
    $date = new DateTime('24-02-2011 14:00');
    $intervalle = date_diff($aujourdhui,$date);
    echo $intervalle->format('Il y a une différence de %y année(s) %m mois %d jour(s) %h heure(s) et %i minute(s)');
?>