<?php
// Auteur: Julien Muggli

// Règle le fuseau horaire par défaut (disponible dès PHP 5.2)
date_default_timezone_set('Europe/Zurich');

class Travailleur {
public $nom = "Guy Tharre";
public $salaire = 0;
public $statut;

  function __construct() {
    $this->;
  }

  function ajouterParagraphe($paragraphe) {
    array_push($this->paragraphes, $paragraphe);
  }

}

?>