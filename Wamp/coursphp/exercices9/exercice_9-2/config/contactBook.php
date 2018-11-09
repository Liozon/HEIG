<?php
    define('CONTACTBOOK_TPL_DIR', 'includes/templates/');
    define('CONTACTBOOK_TPLC_DIR', 'includes/templates_c/');

    define('CONTACTBOOK_SMARTY_DIR', 'includes/smarty/libs/');

    $driver = 'mysql';
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'heigvd-muggli';

    define ('CONTACTBOOK_DB_DSN', "$driver:host=$host;dbname=$dbname");
    define ('CONTACTBOOK_USERNAME', "$username");
    define ('CONTACTBOOK_PASSWORD', "$password");
?>
