<?php
/* Smarty version 3.1.30, created on 2017-02-28 11:37:34
  from "/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/addReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b552ee354790_82564945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b520584199a9ca2bf7170cef50e966cb6f80fa49' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/addReview.tpl',
      1 => 1488216641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b552ee354790_82564945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '126208873058b552ee2a5740_33971695';
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
