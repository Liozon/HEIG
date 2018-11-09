<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Exercice 5-1</title>
</head>

<body>
    <?php
if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND
   !empty($_POST['adresse']) AND !empty($_POST['ville']) AND
   !empty($_POST['code'])) {

       echo "<table border=\"1\" >";
       echo "<caption><b>Vous avez entré les coordonnées suivantes:</b></caption>";
       foreach($_POST as $cle=>$val) {
           echo "<tr> <td> $cle : &nbsp;</td> <td>".stripslashes($val)
               ."</td></tr>";
       }
       echo "</table>";
} else {
?>
        <form action="exercice_5-1.php" method="post">
            <fieldset>
                <legend><b>Saisissez vos coordonnées </b></legend>
                <table border="0">
                    <tr>
                        <td>Nom : </td>
                        <td><input type="text" name="nom" /></td>
                    </tr>
                    <tr>
                        <td>Prénom : </td>
                        <td> <input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>Adresse : </td>
                        <td><input type="text" name="adresse" /></td>
                    </tr>
                    <tr>
                        <td>Ville :</td>
                        <td><input type="text" name="ville" /></td>
                    </tr>
                    <tr>
                        <td>Code postal :</td>
                        <td><input type="text" name="code" maxlength="5" /></td>
                    </tr>
                    <tr>
                        <td>Confirmer</td>
                        <td><input type="submit" value="Valider" /></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>

</html>
<?php
}
?>