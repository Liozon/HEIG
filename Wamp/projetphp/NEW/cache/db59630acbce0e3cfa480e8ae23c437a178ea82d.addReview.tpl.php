<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:08:58
  from "C:\Wamp\www\projetphp\NEW\templates\addReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddd4a05e155_98152819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d14f06458568d4d493524f964938bd865c776d' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\NEW\\templates\\addReview.tpl',
      1 => 1516089771,
      2 => 'file',
    ),
    '984582ce206ff9924d6aa35f392f084bd590831f' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\NEW\\templates\\html.tpl',
      1 => 1516089771,
      2 => 'file',
    ),
    'e91e9f1a928f1a3240bd3aca9fd8b4d792e42a45' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\NEW\\templates\\htmlFin.tpl',
      1 => 1516089771,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5a5ddd4a05e155_98152819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Video Games Reviews</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="index.php?id=listeReview"><img src="images/icon.jpg"/>Video Games Reviews</a></h1>
    </div>
    <nav>
      <ul>
		<li><a href="index.php?id=listeReview">Liste des reviews</a></li>
		<li><a href="index.php?id=addReview">Ajouter une review</a></li>
		<li class="last"><a href="index.php?id=aPropos">A propos de nous</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <aside id="left_column">
      <h2 class="title">Menu</h2>
      <nav>
        <ul>
			<li><a href="index.php?id=listeReview">Liste des reviews</a></li>
			<li><a href="index.php?id=addReview">Ajouter une review</a></li>
			<li><a href="index.php?id=aPropos">A propos de nous</a></li>
			<li><a href="index.php?id=compteUser">Créer un compte</a>
        </ul>
      </nav>
    </aside>
<!-- main content -->
<div id="content">
<h1>Ajoute ta review !</h1>
<p> Sur cette page, vous pouvez ajouter votre propre review d'un jeu vidéo.</p>
<form method="POST" action="index.php?id=addReview" onsubmit="return confirm('Veuillez confirmer votre review svp');">
	<p>Nom du jeu vidéo :</p>
	<input type="text" name="nom" size="50">
	<p>Avis :</p>
	<textarea name="avis" rows="10" cols="47"></textarea>
	<p>Note (sur 10) :</p>
	<input type="number" name="note" min="0" max="10">
	<p>Date de la review :</p>
	<input type="date" name="date" size="50">
	<p>/!\ Tous les champs sont obilgatoires /!\</p>
	<p><button type="submit" name="button">Ajouter</button></p>
</form>
</div>
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 Sami Othmane</p>
    <p class="fl_right">Template: os-templates.com</p>
  </footer>
</div>
</body>
</html><?php }
}
