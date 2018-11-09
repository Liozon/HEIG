<?php
/* Smarty version 3.1.30, created on 2017-02-26 16:34:45
  from "C:\wamp\www\progserv\projet2017\templates\compteUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b303a5d66562_49132322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6652ebbf7cba371e24de44c35f7cc16453f164c' => 
    array (
      0 => 'C:\\wamp\\www\\progserv\\projet2017\\templates\\compteUser.tpl',
      1 => 1488118080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b303a5d66562_49132322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2126158b303a5d371f5_15076302';
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Créer un compte</h1>
<p><b>/!\ Cette page est en construction. Vous pouvez déjà remplir le formulaire d'inscription et une fois le développement fini, vous aurez la possibilité de vous connecter à votre compte /!\</b></p>
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
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
