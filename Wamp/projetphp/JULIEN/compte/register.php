<?php
include('include/head.php');
$smarty = new Smarty();
$db = new Database();
$db = $db->getInstance();
if(isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
}
if(isset($_GET['alreadyUsed'])) {
  $smarty->assign('error_message', "Ce nom d'utilisateur est déjà utilisé.");
}
if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username'])  && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = User::register($db, $username, $password);

    if(!$query) {
      header('Location: register.php?alreadyUsed=true');
    } else {
      $user = User::getUserFromUsername($db, $username);
      $_SESSION['user_id'] = $user[0]['id'];
      header('Location: index.php');
    }
}

$smarty->display('templates/register.tpl');
