<?php
include('include/head.php');
$db = new Database();
$db = $db->getInstance();
$smarty = new Smarty();
if(isset($_SESSION['user_id'])) {
  $smarty->assign('userid', $_SESSION['user_id']);
  $categoryList = Challenge::getCategoryList($db);
  $smarty->assign('categories', $categoryList);

  if(isset($_POST['category']) && isset($_POST['description']) && !empty($_POST['description'])) {
    $challengeCategory = $_POST['category'];
    $challengeDescription = $_POST['description'];
    Challenge::addChallenge($db, $challengeCategory, $challengeDescription, $_SESSION['user_id']);
    Header('Location: index.php');
    exit;
  } elseif (isset($_POST['description']) && empty($_POST['description'])) {
    Header('Location: index.php?create=descriptionError');
    exit;
  }

  if(isset($_GET['create'])) {
    $smarty->assign('createError', "Vous devez entrer une description pour votre challenge.");
  }

  if(isset($_GET['valid'])) {
    Challenge::completeChallenge($db, $_GET['valid'], $_SESSION['user_id']);
    Header('Location: index.php');
    exit;
  }

  if(isset($_POST['newPassword']) && !empty($_POST['newPassword'])) {
    User::changePassword($db, $_SESSION['user_id'], $_POST['newPassword']);
    session_destroy();
    $_SESSION['user_id'] = null;
    Header('Location: login.php');
    exit;
  }

  if(isset($_POST['disconnect'])) {
    session_destroy();
    $_SESSION['user_id'] = null;
    Header('Location: ../index.php');
    exit;
  }

  $challengesToComplete = Challenge::challengesToComplete($db, $_SESSION['user_id']);
  $smarty->assign('challengesToComplete', $challengesToComplete);

  $completedChallenges = Challenge::completedChallenges($db, $_SESSION['user_id']);
  $smarty->assign('completedChallenges', $completedChallenges);

} else {
  header('Location: login.php');
  exit;
}
$smarty->display('templates/index.tpl');
