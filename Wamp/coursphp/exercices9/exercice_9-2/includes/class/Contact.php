<?php

 class Contact {

    public $titre;

    public $nom;

    public $prenom;

    public $adresse;

    public $npa;

    public $ville;

    public $email;

    public $telephone;

    public $mobile;

    public $commentaire;

    public function __construct($array = null) {
        if (!is_array($array)) {
            return;
        }
        $this->setTitre($array['titre']);
        $this->setNom($array['nom']);
        $this->setPrenom($array['prenom']);
        $this->setAdresse($array['adresse']);
        $this->setNpa($array['npa']);
        $this->setVille($array['ville']);
        $this->setEmail($array['email']);
        $this->setTelephone($array['telephone']);
        $this->setMobile($array['mobile']);
        $this->setCommentaire($array['commentaire']);
    }

    public function setTitre($valeur) {
        $this->titre = $valeur;
    }
    public function setNom($valeur) {
        $this->nom = $valeur;
    }
    public function setPrenom($valeur) {
        $this->prenom = $valeur;
    }
    public function setAdresse($valeur) {
        $this->adresse = $valeur;
    }
    public function setNpa($valeur) {
        $this->npa = $valeur;
    }
    public function setVille($valeur) {
        $this->ville = $valeur;
    }
    public function setEmail($valeur) {
        $this->email = $valeur;
    }
    public function setTelephone($valeur) {
        $this->telephone = $valeur;
    }
    public function setMobile($valeur) {
        $this->mobile = $valeur;
    }
    public function setCommentaire($valeur) {}
        $this->commentaire = $valeur;
    }
}

?>