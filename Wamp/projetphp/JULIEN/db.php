<?php
$host = 'pingouin.heig-vd.ch';
$dbname = 'julien.pittolaz';
$user = 'julien.pittolaz';
$pwd = 'test';
$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8mb4', $user, $pwd);
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
