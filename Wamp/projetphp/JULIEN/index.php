<?php

include("header.php");
include("classes/Challenge.php");

$smarty = new Smarty();

$db = new Database();
$db= $db->getInstance();

// affichage de tous les challenges
$a = Challenge::getChallengeAll($db);
if (isset($_SESSION['user_id'])){
$smarty->assign('userid', $_SESSION['user_id']);
}

//var_dump($a->fetchAll());

$smarty->assign("challenges", $a);
$smarty->display("templates/index.tpl");
