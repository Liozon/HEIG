<?php
/* Smarty version 3.1.30, created on 2018-01-16 08:13:45
  from "C:\Wamp\www\projetphp\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5db439aa6898_07382562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f0256f73b9499b11f6a31649e0bc137aec712a' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\register.tpl',
      1 => 1516089133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:search_bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a5db439aa6898_07382562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="javascript/user_register_validation.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

	<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  

	  <h1 class="title">Register</h1>
	  <form action="register_new_user.php" method="post" name="form_register_user" onsubmit="return checkform(this);">
        <table class="ru_create_table">
		  <tr>
		    <td class="ru_menu">Username:</td>
			<td><input type="text" name="username" class="ru_text_input" /></td>
		  </tr>
		  <tr>
		    <td class="ru_menu">Password:</td>
			<td><input type="password" name="password" class="ru_text_input" /></td>
		  </tr>
		  <tr>
		    <td class="ru_menu">Real name:</td>
			<td><input type="text" name="name" class="ru_text_input" /></td>
		  </tr>
		  <tr>
		    <td class="ru_menu">Email:</td>
			<td><input type="text" name="email" class="ru_text_input" /></td>
		  </tr>
		  <tr>
		    <td class="ru_menu">&nbsp;</td>
			<td class="ru_register"><input type="submit" name="register" value="Register" class="ru_register_input" /></td>
		  </tr>
		  
		</table>
      </form>
	  
      
      
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
