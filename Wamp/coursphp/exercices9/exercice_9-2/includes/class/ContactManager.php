<?php

require_once('Contact.php');

class ContactManager {

    protected $db;
    public function __construct($dsn,$username,$password) {
       try {
          $this->db = new PDO($dsn, $username, $password);
       } catch (PDOException $e) {
           die ( "Erreur ! : " . $e->getMessage() );
       }
    }

    public function getAll() {
        $sql = "SELECT * from contacts";
        $requete = $this->db->query($sql);
        $contacts = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($contacts) < 1)
            return array();
        $contactsArray = array();
        foreach ($contacts as $contact) {
            $contactsArray[] = new Contact($contact);
        }
        return $contactsArray;
    }

    public function searchByNom($nom, $tri = 'nom') {
        $sql = "SELECT * FROM contacts WHERE nom LIKE '$nom%' ORDER BY $tri";
        $requete = $this->db->query($sql);
        $contacts = $requete->fetchAll(PDO::FETCH_ASSOC);
        if (count($contacts) < 1)
            return array();
        $contactsArray = array();
        foreach ($contacts as $contact) {
            $contactsArray[] = new Contact($contact);
        }
        return $contactsArray;
    }

    public function add(Contact $contact) {
        $sql = "INSERT INTO contacts " .
               "(titre, nom, prenom, adresse, npa, ville, email, telephone," .
               "mobile, commentaire) VALUES (" .
               "'$contact->titre', " .
               "'$contact->nom', " .
               "'$contact->prenom', " .
               "'$contact->adresse', " .
               "'$contact->npa', " .
               "'$contact->ville', " .
               "'$contact->email', " .
               "'$contact->telephone', " .
               "'$contact->mobile', " .
               "'$contact->commentaire');";
        $this->db->exec($sql);
    }
}

?>