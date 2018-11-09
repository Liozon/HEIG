<?php
/* Smarty version 3.1.30, created on 2017-02-26 14:14:02
  from "C:\wamp\www\progserv\projet2017\templates\aPropos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b2e2aacd6842_42030381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb32a8ad41868fba428843098e1f07f8f1850f2' => 
    array (
      0 => 'C:\\wamp\\www\\progserv\\projet2017\\templates\\aPropos.tpl',
      1 => 1488118440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html.tpl' => 1,
    'file:htmlFin.tpl' => 1,
  ),
),false)) {
function content_58b2e2aacd6842_42030381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>A propos de nous !</h1>
<img src="images/persos.jpg" width="630px"/>
<p>Nous sommes une petite équipe de passionné de jeu vidéo et nous voulions avoir la possibilité de partager nos différents avis sur nos jeux préférés.</p>
<p>C'est pourquoi nous avons créer ce "mini-site" qui permet de faire une review d'un jeu vidéo en donnant son avis et une note. Ainsi, n'importe qui peut y participer, en donnant son propre avis, afin de faire grossir le nombre de jeu vidéo "testé".</p>
<p>Ce site est 100% gratuit et bénévole !</p>
<?php $_smarty_tpl->_subTemplateRender("file:htmlFin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
