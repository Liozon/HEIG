<?php
/* Smarty version 3.1.30, created on 2017-02-21 14:15:26
  from "/Applications/MAMP/htdocs/projetphp/htdocs/templates/categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ac3d6e2fb536_29090151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c793ee68c145cc5be5166f69ee25ef1053f9de4d' => 
    array (
      0 => '/Applications/MAMP/htdocs/projetphp/htdocs/templates/categories.tpl',
      1 => 1487682907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:listeChallenge.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58ac3d6e2fb536_29090151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:listeChallenge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
