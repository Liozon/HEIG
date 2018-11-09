<?php
/* Smarty version 3.1.30, created on 2017-02-27 18:35:31
  from "/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/compteUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b46363d09e89_37203922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ca8909deeb618f1e2eadd5876f3d97997b3a69' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projet2017/templates/compteUser.tpl',
      1 => 1488216879,
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
function content_58b46363d09e89_37203922 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>Créer un compte</h1>
<p><b>/!\ Cette page est en construction. Vous pouvez déjà remplir le formulaire d'inscription et, une fois le développement fini, vous aurez la possibilité de vous connecter à votre compte /!\</b></p>
<form method="POST" action="index.php">
	<p>Nom d'utilisateur :</p>
	<input type="text" name="user" size="50">
	<p>Mot de passe :</p>
	<input type="password" name="psw">
	<p>E-mail :</p>
	<input type="email" name="email" size="50">
	<p>Pays :</p>
	<input type="text" name="pays" size="50">
	<p>NPA :</p>
	<input type="number" name="npa" size="4">
	<p>Date de naissance :</p>
	<input type="date" name="birth">
	<p>/!\ Tous les champs sont obilgatoires /!\</p>
	<p><button type="submit" name="button">Inscription</button></p>
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
