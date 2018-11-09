<?php

include("header.php");
include("classes/Challenge.php");

$smarty = new Smarty();

$db = new Database();
$db= $db->getInstance();

$a = Challenge::getChallengeCategory(2, $db);
if (isset($_SESSION['user_id'])){
$smarty->assign('userid', $_SESSION['user_id']);
}
$smarty->assign("challenges", $a);
$smarty->display("templates/categories.tpl");
