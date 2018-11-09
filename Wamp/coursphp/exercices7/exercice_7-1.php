<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Exercice 6-5</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<p>
<?php

require_once('Tamagoshi.php');

$Tama = new Tamagoshi();

$fatigue = $_REQUEST['fatigue'];
$faim = $_REQUEST['faim'];
$soif = $_REQUEST['soif'];
$poids = $_REQUEST['poids'];

/
if (!isset($_REQUEST['effectuer'])) {
    $Tama->setNiveauFatigue(0.5);
    $Tama->setNiveauFaim(0.5);
    $Tama->setNiveauSoif(0.5);
    $Tama->setPoids(50);
} else {
    $Tama->setNiveauFatigue($fatigue);
    $Tama->setNiveauFaim($faim);
    $Tama->setNiveauSoif($soif);
    $Tama->setPoids($poids);
}

if (isset($_REQUEST['action'])) {
    switch($_REQUEST['action']) {
        case 'dormir':
            $Tama->dormir();
        break;
        case 'nourrir':
            $Tama->nourrir();
        break;
        case 'abreuver':
            $Tama->abreuver();
        break;
        case 'faireExercice':
            $Tama->faireExercice();
        break;
        case 'patienter':
        default:
            $Tama->patienter();
        break;
    }
}

print $Tama;

?>
</p>

<h1>Actions</h1>

<form action="" method="get">
  <p>
    <input type="hidden" name="fatigue" value="<?php print $Tama->getNiveauFatigue() ?>" />
    <input type="hidden" name="faim" value="<?php print $Tama->getNiveauFaim() ?>" />
    <input type="hidden" name="soif" value="<?php print $Tama->getNiveauSoif() ?>" />
    <input type="hidden" name="poids" value="<?php print $Tama->getPoids() ?>" />

    <input type="radio" name="action" value="dormir" />Dormir<br />
    <input type="radio" name="action" value="nourrir" />Nourrir<br />
    <input type="radio" name="action" value="abreuver" />Abreuver<br />
    <input type="radio" name="action" value="faireExercice" />Faire exercice<br />
    <input type="radio" name="action" value="patienter" />Patienter<br />

    <input type="submit" name="effectuer" value="Effectuer" />
  </p>
</form>

</body>
</html>