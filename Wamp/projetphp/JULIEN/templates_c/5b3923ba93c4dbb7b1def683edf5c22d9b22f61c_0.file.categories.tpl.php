<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:03:26
  from "C:\Wamp\www\projetphp\JULIEN\templates\categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddbfe3b2219_74331926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b3923ba93c4dbb7b1def683edf5c22d9b22f61c' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\templates\\categories.tpl',
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
function content_5a5ddbfe3b2219_74331926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:listeChallenge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
