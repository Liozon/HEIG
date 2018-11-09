<?php
/* Smarty version 3.1.30, created on 2017-02-27 19:34:58
  from "/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/aPropos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b4715281ec65_44234905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a82498fe6ddd7aded939e252b437d8e085a2616' => 
    array (
      0 => '/home/EINET/sami.othmane/public_html/progcs/projetVGR/templates/aPropos.tpl',
      1 => 1488216832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b4715281ec65_44234905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '197683962558b471527f7c19_63174630';
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>A propos de nous !</h1>
<img src="images/persos.jpg" width="630px"/>
<p>Nous sommes une petite équipe de passionnés de jeux vidéos et nous voulions avoir la possibilité de partager nos différents avis sur nos jeux préférés.</p>
<p>C'est pourquoi nous avons créé ce "mini-site" qui permet de faire une review d'un jeu vidéo en donnant son avis et une note. Ainsi, quiconque peut y participer, en donnant son propre avis, afin de faire grossir le nombre de jeux vidéos "testés".</p>
<p>Ce site a été conçu bénévolement et il est complétement gratuit !</p>
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
