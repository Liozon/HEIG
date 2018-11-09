<?php
/* Smarty version 3.1.30, created on 2017-02-26 14:01:33
  from "C:\wamp\www\progserv\projet2017\templates\addReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2dfbdafd866_37563761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b7c326139d851f056d8757f1538485576d4e6e' => 
    array (
      0 => 'C:\\wamp\\www\\progserv\\projet2017\\templates\\addReview.tpl',
      1 => 1488117692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b2dfbdafd866_37563761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Ajoute ta review !</h1>
<p> Sur cette page, tu peux ajouter ta propore review d'un jeu vidéo.</p>
<form method="GET" action="index.php">
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
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
