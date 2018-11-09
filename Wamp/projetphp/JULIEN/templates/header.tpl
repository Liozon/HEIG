<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/uikit.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <script type="text/javascript">
  {if isset($userid)}
  var userid = {$userid};
  {else}
  var userid = -1;
  {/if}

  </script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"></script>
  <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
  <script src="js/script.js" charset="utf-8"></script>
  <script src="js/uikit.min.js"></script>
  <meta charset="utf-8">
  <title>OUT OF THE BOX</title>
</head>
<body class="uk-container-large uk-container">

<header>
  <h1> <img id="logo" src="images/logo.svg" alt="logo" />
    Sors de ta zone de confort!</h1>
    </header>
  <ul class="uk-tab">
  <li aria-expanded="true">   <a href="index.php">Accueil</a> </li>
  <li aria-expanded="true">    <a href="humain.php">Humain</a> </li>
  <li aria-expanded="true">    <a href="ecologie.php">Écologie</a> </li>
  <li aria-expanded="true">    <a href="culture.php">Culture</a> </li>
  <li aria-expanded="true">    {if !isset($userid)}<a href="compte/login.php">Connexion</a>{else}<a href="compte/index.php">Mon compte</a>{/if} </li>
</ul>
