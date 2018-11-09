<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Exercice chapitre 5-4</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Transférer un fichier ZIP </b></legend>
            <table border="0">
                <tr>
                    <td>Choisir un fichier </td>
                    <td><input type="file" name="fich" /></td>
                    <td><input type="hidden" name="MAX_FILE_SIZE" accept="application/zip" value="1000000" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="ENVOI" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>

<?php

if(isset($_FILES['fich'])) {
    if($_POST["MAX_FILE_SIZE"] <$_FILES["fich"]["size"]) {
        echo "<b>Beaucoup trop lourd ! </b><hr />";
        echo "Taille maximale :". $_POST["MAX_FILE_SIZE"] . "octets<hr / >";
        echo "Taille du fichier uploadé :" . $_FILES["fich"]["size"] . "octets<hr / >";
    } else {

        $result=move_uploaded_file($_FILES["fich"]["tmp_name"],"/tmp/monfichier.zip");
        
	if($result==TRUE) {
            echo "<b>Vous avez bien transféré le fichier</b><hr />";
            echo "Le nom du fichier est : " . $_FILES["fich"]["name"] . "<hr/>";
            echo "Votre fichier a une taille de " . $_FILES["fich"]["size"] . "octets<hr />";
        } else {
            echo "<hr /> Erreur de transfert n°" . $_FILES["fich"]["error"];
        }
     }
}
?>