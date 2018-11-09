<?php
/* Smarty version 3.1.30, created on 2017-02-26 19:10:07
  from "/home/EINET/julien.pittolaz/public_html/progcs/challenges/templates/categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b319ffba8cd9_52916908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9929a1cfddfd8c14689b8af36b581376eb5d2afe' => 
    array (
      0 => '/home/EINET/julien.pittolaz/public_html/progcs/challenges/templates/categories.tpl',
      1 => 1487952585,
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
function content_58b319ffba8cd9_52916908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:listeChallenge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
