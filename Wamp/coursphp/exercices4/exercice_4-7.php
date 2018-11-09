<?php

if (!isset($_GET['mon_nom']) && !isset($_GET['mon_age']) || !is_numeric($_GET['mon_age']) || empty($_GET['mon_nom']) ) {

?>

<form method="get" action="">
  <p>
    <label for="mon_nom">Nom:</label>
    <input type="text" name="mon_nom" id="mon_nom" />
    <br />
    <label for="mon_nom">Âge:</label>
    <input type="text" name="mon_age" id="mon_age" />
    <input type="submit" value="Envoyer" />
  </p>
</form>

<?php

} else {

    $mon_nom = $_GET['mon_nom'];
    $mon_age = $_GET['mon_age'];

    print "<p>\n";
    print "<b>Mon nom:</b> $mon_nom\n";
    print "<br />\n";
    print "<b>Mon âge:</b> $mon_age\n";
    print "<br />\n";
    print "</p>\n";

?>

<p>
<a href="?">Recommencer</a>
</p>

<?php

}

?>