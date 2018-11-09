<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:27:23
  from "C:\Wamp\www\projetphp\templates\add_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd38bf032b9_11682260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5dbb3e8b8482b7fd86c98c477df66f0032a8899' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\add_article.tpl',
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
function content_5a5dd38bf032b9_11682260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="javascript/art_add_upd_validation.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
	  <h1 class="title">Add article</h1>
	  
	  <form action="add_new_article.php" method="post" name="form_add_article" onsubmit="return checkform(this);">
	  <table cellspacing="0" class="upd_table">
	    <tr>
		  <td class="upd_table_title">Headline</td>
		  <td class="upd_table_input"><input type="text" name="headline" class="upd_input_text"></td>
		</tr>
		<tr>
		  <td class="upd_table_title">Body</td>
		  <td class="upd_table_input"><textarea name="article_body" class="upd_input_textarea"></textarea></td>
		</tr>
		<tr>
		  <td class="upd_table_title">Tags<br /><span style="font-size:9px;font-weight:100;">separate with space</span></td>
		  <td class="upd_table_input"><input type="text" name="tags" class="upd_input_text"></td>
		</tr>
        <tr>
          <td colspan="2" class="upd_table_submit"><input name="add" type="submit" value="Add article" class="upd_input_submit"></td>
        </tr>
	  </table>
	  <input type="hidden" name="blogid" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" />
	  <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      </form>
	  
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
