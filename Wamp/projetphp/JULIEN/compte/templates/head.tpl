<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon compte - Out of the box</title>
    <script type="text/javascript">
    {if isset($userid)}
    var userid = {$userid};
    {else}
    var userid = -1;
    {/if}
    </script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="../css/uikit.min.css">
    <link rel="stylesheet" href="../css/admin.css">
  </head>
    <body class="uk-container-large uk-container">

    <header>
      <h1> <img id="logo" src="../images/logo.svg" alt="logo" />
        Sors de ta zone de confort!</h1>
        </header>
      <ul class="uk-tab">
      <li aria-expanded="true"><a href="../index.php">Accueil</a></li>
      <li aria-expanded="true"><a href="../humain.php">Humain</a></li>
      <li aria-expanded="true"><a href="../ecologie.php">Écologie</a></li>
      <li aria-expanded="true"><a href="../culture.php">Culture</a></li>
      <li aria-expanded="true">{if !isset($userid)}<a href="login.php">Connexion</a>{else}<a href="index.php">Mon compte</a>{/if} </li>
    </ul>
