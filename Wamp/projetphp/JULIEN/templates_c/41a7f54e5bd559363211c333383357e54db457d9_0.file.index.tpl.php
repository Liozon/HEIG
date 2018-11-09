<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:03:08
  from "C:\Wamp\www\projetphp\JULIEN\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddbecada0f8_62373114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41a7f54e5bd559363211c333383357e54db457d9' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\templates\\index.tpl',
      1 => 1516089805,
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
function content_5a5ddbecada0f8_62373114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:listeChallenge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
