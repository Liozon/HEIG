<?php
/* Smarty version 3.1.30, created on 2017-02-26 12:10:01
  from "C:\wamp\www\progserv\projet2017\templates\listeReview.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2c599868cb1_46984664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d31d41ab58f750e05ece1ac05a9cfd16cc8015' => 
    array (
      0 => 'C:\\wamp\\www\\progserv\\projet2017\\templates\\listeReview.tpl',
      1 => 1488110999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b2c599868cb1_46984664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div id="liste">
		<h1>Liste des reviews</h1>
		<p>Vous trouverez sur cette page la liste complète des reviews de jeux vidéos disponible !</p>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
			<hr with="100%">
			<h2><?php echo $_smarty_tpl->tpl_vars['record']->value['nom'];?>
</h2>
			<p id="avis">Avis :</p>
			<?php echo $_smarty_tpl->tpl_vars['record']->value['avis'];?>

			<p id="note">Note : <b><?php echo $_smarty_tpl->tpl_vars['record']->value['note'];?>
</b>/10</p>
			<p id="date">Date de publication: <?php echo $_smarty_tpl->tpl_vars['record']->value['date'];?>
</p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
