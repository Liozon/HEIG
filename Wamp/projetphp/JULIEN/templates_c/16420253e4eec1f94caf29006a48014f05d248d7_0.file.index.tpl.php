<?php
/* Smarty version 3.1.30, created on 2017-03-01 13:56:32
  from "/home/EINET/julien.pittolaz/public_html/progcs/challenges/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b6c500838645_29919180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16420253e4eec1f94caf29006a48014f05d248d7' => 
    array (
      0 => '/home/EINET/julien.pittolaz/public_html/progcs/challenges/templates/index.tpl',
      1 => 1488372968,
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
function content_58b6c500838645_29919180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:listeChallenge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
