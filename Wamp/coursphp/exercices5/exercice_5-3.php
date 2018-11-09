<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Exercice 5-3</title>
</head>

<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend><b>Saisissez le prix hors taxe et le taux de TVA </b></legend>
            <table border="0">
                <tr>
                    <td>Prix Hors taxe : </td>
                    <td><input type="text" name="prixht" value="<?=$_POST['prixht']?>" /></td>
                </tr>
                <tr>
                    <td>Taux de TVA (attention, en % !) : </td>
                    <td><input type="text" name="tva" value="<?=$_POST['tva']?>" /></td>
                </tr>
                <?php
  if(!empty($_POST['prixht']) AND !empty($_POST['tva']) ) {
      echo "<tr><td>Montant de la TVA : </td><td><input type=\"text\"value=\"".round($_POST['prixht']*$_POST['tva']/100,2) . "\"/></td></tr>";
      echo "<tr><td>Prix TTC : </td><td><input type=\"text\"value=\"".round($_POST['prixht']*(1+$_POST['tva']/100),2) . "\"/></td></tr>";
  } else {
      echo "<b>Le formulaire est incomplet!</b>";
  }
?>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="ENVOI" /></td>
                    </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>