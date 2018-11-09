<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:03:35
  from "C:\Wamp\www\projetphp\JULIEN\compte\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddc070d65c9_34293670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ebea6a93b9d8455ce889dc4a9e1481e9e6b2a7' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\compte\\templates\\login.tpl',
      1 => 1516089811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5ddc070d65c9_34293670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Se connecter</h1>
<form class="" action="" method="post">
  <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)) {?>
  <div>
    <p class="uk-label uk-label-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
  </div>
  <?php }?>
  <input type="text" name="username" value="" placeholder="Username">
  <input type="password" name="password" value="" placeholder="Password">
  <input type="submit" value="Se connecter">
</form>
<p>Pas encore de compte ? <a href="register.php">Créez-en un !</a></p>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
