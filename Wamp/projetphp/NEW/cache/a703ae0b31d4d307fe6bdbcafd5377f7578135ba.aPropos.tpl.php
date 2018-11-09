<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:50:21
  from "C:\Wamp\www\projetphp\NEW\templates\aPropos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd8edaa8941_55757174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1881d81113fd00c8d95ee9509ddac00feb271b56' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\NEW\\templates\\aPropos.tpl',
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
function content_5a5dd8edaa8941_55757174 (Smarty_Internal_Template $_smarty_tpl) {
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
