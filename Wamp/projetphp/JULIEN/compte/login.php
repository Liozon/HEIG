<?php
include('include/head.php');
$smarty = new Smarty();
$db = new Database();
$db = $db->getInstance();
if(isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit;
} else {
  if(isset($_POST['username']) && isset($_POST['password'])) {
    if(User::login($db, $_POST['username'], $_POST['password'])) {
      header('Location: index.php');
      exit;
    } else {
      $smarty->assign('error_message', "Nom d'utilisateur ou mot de passe incorrect.");
    }
  }
}


$smarty->display('templates/login.tpl');
