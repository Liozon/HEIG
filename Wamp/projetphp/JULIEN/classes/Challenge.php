<?php

class Challenge {

  private $id;
  private $description;
  private $categorie_id;
  private $user_id;


  function __construct($id, $description, $categorie_id, $user_id)
  {

    $this->id = $id;
    $this->description = $description;
    $this->categorie_id = $categorie_id;
    $this->user_id  = $user_id;

  }
  //rend tous les challenges
  public static function getChallengeAll($db){
    return $db->query("SELECT challenges.id, description, categories.nom AS 'categorie', COUNT(participation.id) AS nb_inscrits, SUM(participation.raised) AS nb_succeeded
     FROM challenges
     INNER JOIN categories ON categories.id = challenges.categorie_id
     LEFT JOIN participation ON participation.challenge_id = challenges.id
     GROUP BY challenges.id
");

    }


    // rend les challenges par categorie
    public static function getChallengeCategory($categorie_id, $db){
      return $db->query("SELECT challenges.id, description, COUNT(participation.id) AS nb_inscrits, SUM(participation.raised) AS nb_succeeded
      FROM challenges
      LEFT JOIN participation ON participation.challenge_id = challenges.id
      WHERE challenges.categorie_id = $categorie_id
      GROUP BY challenges.id");

      }


      // insert une inscription dans la table participation
      public static function register($challenge_id, $db) {
        $userid = $_SESSION['user_id'];
        return $db->exec("INSERT INTO participation (user_id, challenge_id) VALUES ($userid, $challenge_id)");

      }
      // vérifie si l'utilisateur ne s'est pas déjà inscrit à un challenge
      public static function alreadyRegistered($userid, $challengeid, $db){
        $query = $db->query("SELECT user_id, challenge_id FROM participation  WHERE user_id = $userid AND challenge_id= $challengeid");
        $nbLignes = $query->rowCount();
        if ($nbLignes>0) {
          return true;
        } else {
          return false;
        }
      }


    }
