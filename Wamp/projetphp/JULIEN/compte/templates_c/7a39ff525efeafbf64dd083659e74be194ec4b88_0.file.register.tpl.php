<?php
/* Smarty version 3.1.30, created on 2017-02-27 18:28:38
  from "C:\wamp64\www\ProjetPHP\htdocs\compte\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b46fd60c88e5_23281994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a39ff525efeafbf64dd083659e74be194ec4b88' => 
    array (
      0 => 'C:\\wamp64\\www\\ProjetPHP\\htdocs\\compte\\templates\\register.tpl',
      1 => 1486138856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58b46fd60c88e5_23281994 (Smarty_Internal_Template $_smarty_tpl) {
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
