<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:06:41
  from "C:\Wamp\www\projetphp\JULIEN\compte\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddcc1dafcd8_05150009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe16e08006300b807792ae30abb680450f4cea02' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\compte\\templates\\register.tpl',
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
function content_5a5ddcc1dafcd8_05150009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Créer votre compte</h1>
<form class="" action="" method="post">
  <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)) {?>
    <p class="uk-label uk-label-danger"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</p>
  <?php }?>
  <input type="text" name="username" value="" placeholder="Username">
  <input type="password" name="password" value="" placeholder="Password">
  <input type="submit" value="S'inscrire">
</form>
<p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous !</a></p>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
