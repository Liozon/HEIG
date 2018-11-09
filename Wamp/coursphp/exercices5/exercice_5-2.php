<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-(" />
    <title>Exercice 5-2</title>
</head>

<body>
    <form action="exercice_5-2.php" method="post">
        <fieldset>
            <legend><b>Entrez votre email </b></legend>
            <table border="0">
                <tr>
                    <td>email : </td>
                    <td><input type="text" name="mail" /><input type="hidden" name="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="ENVOI" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
if(!empty($_POST['mail']) AND !empty($_POST['navigateur']) ) {
    echo "<table border=\"1\" >";
    echo "<caption><b>Votre mail et votre navigateur</b></caption>";

    foreach($_POST as $cle=>$val) {
        echo "<tr> <td> $cle : &nbsp;</td> <td>" . stripslashes($val) . "</td></tr>";
    }
    echo "</table>";
} 
?>
</body>

</html>