<?php

include("header.php");
include("classes/Challenge.php");

$db = new Database();
$db= $db->getInstance();
$challengeid = $_GET['challengeid'];
$b = Challenge::alreadyRegistered($_SESSION['user_id'],$challengeid,$db);
if ($b) {
echo "alreadyReg";
} else {
$a = Challenge::register($challengeid,$db);
}
