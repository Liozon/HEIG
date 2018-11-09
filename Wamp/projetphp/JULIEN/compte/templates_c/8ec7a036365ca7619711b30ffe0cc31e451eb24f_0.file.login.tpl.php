<?php
/* Smarty version 3.1.30, created on 2017-02-26 19:08:56
  from "/home/EINET/julien.pittolaz/public_html/progcs/compte/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b319b85caa01_02797881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec7a036365ca7619711b30ffe0cc31e451eb24f' => 
    array (
      0 => '/home/EINET/julien.pittolaz/public_html/progcs/compte/templates/login.tpl',
      1 => 1488132475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58b319b85caa01_02797881 (Smarty_Internal_Template $_smarty_tpl) {
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
