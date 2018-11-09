<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:16:57
  from "C:\Wamp\www\projetphp\templates\create_blog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd11934f201_83663558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c214a9248ebd1abebaa1dcdc25ffca566771f9' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\create_blog.tpl',
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
function content_5a5dd11934f201_83663558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="javascript/blog_add_validation.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

	<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  

	  <h1 class="title">Create Blog</h1>
	  <form action="create_new_blog.php" method="post" name="form_create_blog" onsubmit="return checkform(this);">
        <table class="cb_create_table">
          <tr>
            <td class="cb_menu">Blog Title:</td>
            <td><input name="title" type="text" maxlength="80" class="cb_title_input" /></td>
          </tr>
          <tr>
            <td class="cb_menu">Summary:</td>
            <td><textarea name="summary" cols="" rows="" class="cb_summary_input"></textarea></td>
          </tr>
          <tr>
		    <td>&nbsp;</td>
            <td class="cb_create"><input name="create" type="submit" value="Create" class="cb_create_input" /></td>
          </tr>
        </table>
        <input name="userid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      </form>
	  
      
      
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
