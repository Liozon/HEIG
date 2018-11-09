<?php

// --- Classe Carte ----------------------------------------------------------//
class Carte {

    // Propriétés de la classe Carte
    protected $valeur;
    protected $couleur;
    protected $points;

    // Couleurs de cartes possibles
    protected static $couleursPossibles = array(
        'trefle', 'carreau', 'pique', 'coeur'
    );

    // Constructeur de la classe Carte
    public function __construct($valeur, $couleur, $points) {
        // Test de la validité des arguments
        if (!in_array($couleur, self::$couleursPossibles)) {
            die('Couleur invalide!');
        }
        if (!is_int($points)) {
            die('Le nombre de points doit être de type numerique!');
        }

        // Assignation de la valeur des arguments aux propriétés de l'objet
        $this->valeur = $valeur;
        $this->couleur = $couleur;
        $this->points = $points;
    }

    // Fonction __toString
    public function __tostring() {
        return "Le $this->valeur de $this->couleur vaut $this->points";
    }

    // Affichage de la carte
    public function afficher() {
        print $this->__tostring();
    }

    // Récupération de la valeur de la carte
    public function getValeur() {
        return $this->valeur;
    }

    // Récupération de la couleur de la carte
    public function getCouleur() {
        return $this->couleur;
    }

    // Récupération du nombre de points de la carte
    public function getPoints() {
        return $this->points;
    }

    // Récupération des valeurs possibles pour la création d'une carte
    public static function getValeursPossibles() {
        return self::$valeursPossibles;
    }

    // Récupération des couleurs possibles pour la création d'une carte
    public static function getCouleursPossibles() {
        return self::$couleursPossibles;
    }
}


// --- Classe Jeu ------------------------------------------------------------//
abstract class Jeu {

    // Tableau des cartes contenues dans le jeu
    protected $cartes = array();

    // Les valeurs possibles, couleurs possibles et nb de points par valeur
    protected $valeursPossibles = array();
    protected $couleursPossibles = array();
    protected $pointsParValeur = array();

    // Constructeur de la classe Jeu
    public function __construct() {
        $this->couleursPossibles = Carte::getCouleursPossibles();
        $this->cartes = $this->creerCartes();
    }

    // Fonction de mélange du jeu de cartes
    public function melanger() {
        shuffle($this->cartes);
    }

    // Tirage la première carte du jeu de carte
    public function tirerCarte() {
        $carte = array_shift($this->cartes);
        if (is_null($carte)) {
            die ('Plus aucune carte!');
        }
        return $carte;
    }

    // Fonction __toString
    public function __tostring() {
        $string = '';
        foreach ($this->cartes as $carte) {
             $string .= $carte->__tostring() . "<br />\n";
        }
        return $string;
    }

    // Affichage du jeu de cartes
    public function afficher() {
        print $this->__tostring();
    }

    // Création des cartes
    protected function creerCartes() {
        $cartes = array();
        // Pour chaque couleur et chaque valeur, on crée une carte
        foreach ($this->couleursPossibles as $couleur) {
            foreach ($this->valeursPossibles as $cleValeur => $valeur) {
                $points = isset($this->pointsParValeur[$valeur]) ?
                          $this->pointsParValeur[$valeur] : $cleValeur;
                array_push($cartes, new Carte($valeur, $couleur, $points));
            }
        }
        return $cartes;
    }

}


// --- Classe Jeu36 ----------------------------------------------------------//
class Jeu36 extends Jeu {

    // Constructeur de la classe Jeu36
    public function __construct() {
        $this->valeursPossibles = array(6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'as');
        parent::__construct();
    }
}

// --- Classe Jeu56 ----------------------------------------------------------//
class Jeu56 extends Jeu {

    // Constructeur de la classe Jeu56
    public function __construct() {
        $this->valeursPossibles = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'as');
        parent::__construct();
    }
}


// --- Classe JeuBlackJack ----------------------------------------------------------//
class JeuBlackJack extends Jeu56 {

    // Constructeur de la classe JeuBlackJack
    public function __construct() {
        $this->pointsParValeur = array(
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
            'valet' => 10,
            'dame' => 10,
            'roi' => 10,
            'as' => 10
        );
        parent::__construct();
    }
}

?>