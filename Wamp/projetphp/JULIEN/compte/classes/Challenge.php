<?php

class Challenge {

  public static function getAllFromUser(PDO $db, $user_id) {
    $sql = "SELECT * FROM challenges WHERE user_id = $user_id";
    return $db->query($sql);
  }

  public static function getCategoryList(PDO $db) {
    $sql = "SELECT * FROM categories";
    return $db->query($sql);
  }

  public static function addChallenge(PDO $db, $id, $description, $userid) {
    $sql = "INSERT INTO challenges (categorie_id, description, user_id) VALUES (:id, :description, :userid)";
    $sql = $db->prepare($sql);
    $sql->bindParam('id', $id);
    $sql->bindParam('description', $description);
    $sql->bindParam('userid', $userid);
    $sql->execute();
  }

  public static function challengesToComplete(PDO $db, $userid) {
    $sql = "SELECT challenges.id, challenges.description, categories.nom AS 'categorie'
    FROM challenges
    INNER JOIN categories ON categories.id = challenges.categorie_id
    INNER JOIN participation ON participation.challenge_id = challenges.id
    INNER JOIN users ON users.id = participation.user_id
    WHERE participation.raised = 0 AND users.id = $userid";
    return $db->query($sql);
  }

  public static function completedChallenges(PDO $db, $userid) {
    $sql = "SELECT challenges.id, challenges.description, categories.nom AS 'categorie'
    FROM challenges
    INNER JOIN categories ON categories.id = challenges.categorie_id
    INNER JOIN participation ON participation.challenge_id = challenges.id
    INNER JOIN users ON users.id = participation.user_id
    WHERE participation.raised = 1 AND users.id = $userid";
    return $db->query($sql);
  }

  public static function completeChallenge(PDO $db, $challengeId, $userId) {
    $sql = "UPDATE participation SET raised = 1
    WHERE challenge_id = '$challengeId'
    AND user_id = '$userId'";
    $db->exec($sql);
  }
}
