<?php
/* Smarty version 3.1.30, created on 2017-02-27 18:57:49
  from "/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/aPropos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b4689d3ffd36_38805695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb775744c8c3ad4ca714b39d5e46ffbf0f4acbd' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/aPropos.tpl',
      1 => 1488216832,
      2 => 'file',
    ),
    'a23fbcdbe0e60a979e13d070f2470a06a3cd84af' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/html.tpl',
      1 => 1488108049,
      2 => 'file',
    ),
    'a85eabc87b051ca1485133906681d53a34d21a7b' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/htmlFin.tpl',
      1 => 1488131026,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_58b4689d3ffd36_38805695 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>A propos de nous !</h1>
<img src="images/persos.jpg" width="630px"/>
<p>Nous sommes une petite équipe de passionnés de jeux vidéos et nous voulions avoir la possibilité de partager nos différents avis sur nos jeux préférés.</p>
<p>C'est pourquoi nous avons créé ce "mini-site" qui permet de faire une review d'un jeu vidéo en donnant son avis et une note. Ainsi, quiconque peut y participer, en donnant son propre avis, afin de faire grossir le nombre de jeux vidéos "testés".</p>
<p>Ce site a été conçu bénévolement et il est complétement gratuit !</p>
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
