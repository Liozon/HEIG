<?php

class User {

  public static function login(PDO $db, $username, $password) {
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $user = $db->query($sql);
    $result = $user->rowCount();
    $user = $user->fetch();
    if($result == 1) {
      $_SESSION['user_id'] = $user['id'];
      return true;
    } else {
      return false;
    }
  }

  public static function getUserFromUsername(PDO $db, $username) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    return $db->query($sql)->fetchAll();
  }

  public static function register(PDO $db, $username, $password) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $check = $db->query($sql)->rowCount();
    if($check != 0) {
      return false;
    } else {
      $password = md5($password);
      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
      $db->exec($sql);
      return true;
    }
  }

  public static function changePassword(PDO $db, $userId, $newPassword) {
    $password = md5($newPassword);
    $sql = "UPDATE users SET password = '$password'
            WHERE id = $userId";
    $db->exec($sql);
  }

}
