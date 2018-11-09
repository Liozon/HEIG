<?php
/* Smarty version 3.1.30, created on 2017-11-11 14:18:02
  from "/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/addReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a06f88a5119c6_64720867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b520584199a9ca2bf7170cef50e966cb6f80fa49' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/addReview.tpl',
      1 => 1488216641,
      2 => 'file',
    ),
    'ad0c77fc1d1044dddecb893ea6632c134d8a3f56' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/html.tpl',
      1 => 1488108049,
      2 => 'file',
    ),
    '480c13bb3dcee2dfb69c79c02ebceabbdf2cca1b' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/htmlFin.tpl',
      1 => 1488131026,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5a06f88a5119c6_64720867 (Smarty_Internal_Template $_smarty_tpl) {
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
