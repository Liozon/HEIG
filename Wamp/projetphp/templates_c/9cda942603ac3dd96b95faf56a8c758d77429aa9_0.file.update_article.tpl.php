<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:34:20
  from "C:\Wamp\www\projetphp\templates\update_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd52c958c85_62135961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cda942603ac3dd96b95faf56a8c758d77429aa9' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\update_article.tpl',
      1 => 1516089134,
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
function content_5a5dd52c958c85_62135961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="javascript/art_add_upd_validation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="javascript/checkDel.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

<!-- CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <br />
      <?php if ($_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['blog']->value['userid']) {?>
      <div class="options">
        <a href="update_article.php?blogid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">Update article</a> | <a href="javascript:void(0)" onclick="javascript:checkDelArticle(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
)">Delete article</a>
      </div>
	  <?php }?>
      <h2 class="subtitle">Article details</h2>
      <form action="update_article_action.php" method="post" name="form_update" onsubmit="return checkform(this);">
	  <table cellspacing="0" class="upd_table">
	    <tr>
		  <td class="upd_table_title">Headline</td>
		  <td class="upd_table_input"><input type="text" name="headline" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
" class="upd_input_text"></td>
		</tr>
		<tr>
		  <td class="upd_table_title">Body</td>
		  <td class="upd_table_input"><textarea name="article_body" class="upd_input_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['article_body'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
		</tr>
		<tr>
		  <td class="upd_table_title">Tags<br /><span style="font-size:9px;font-weight:100;">separate with space</span></td>
		  <td class="upd_table_input"><input type="text" name="tags" class="upd_input_text" value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
"></td>
		</tr>
        <tr>
          <td colspan="2" class="upd_table_submit"><input name="update" type="submit" value="Update article" class="upd_input_submit" /></td>
        </tr>
	  </table>
	  <input type="hidden" name="blogid" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" />
	  <input type="hidden" name="articleid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" />
	  <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      </form>
	  <br />
      <hr />
      <h2 class="subtitle">Manage photos</h2>
      <form action="update_article_add_photo.php" method="post" enctype="multipart/form-data" name="form_up_photo">
      <p>
  		<span class="upd_photo_title">Upload photo</span>
        <input type="file" name="imagefile" value="Image file" size="30">
  		<input type="submit" name="upload" value="Upload image">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input type="hidden" name="blogid" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
" />
	    <input type="hidden" name="articleid" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" />
	    <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      </p>
      </form>
      <p>
<?php if (empty($_smarty_tpl->tpl_vars['photos']->value)) {?>
        No photos found
<?php } else { ?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo', false, NULL, 'list', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['total'];
?>
		<div style="float:left;margin:5px;">
		  <img src="get_image.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['photo']->value['imagesize'];?>
 alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['imagename'];?>
"><br />
		  <a href="update_article_del_photo.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&articleid=<?php echo $_smarty_tpl->tpl_vars['details']->value['id'];?>
&photoid=<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
">Delete photo</a>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration'] : null)%3 == 0) {?>
		<div style="clear: both;"></div>
		<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['last'] : null) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['iteration'] : null)%3 != 0) {?>
		<div style="clear: both;"></div>
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }?>
      </p>
	  
	  <hr />
      <h2 class="subtitle">Manage comments</h2>
	  
	  <?php if (empty($_smarty_tpl->tpl_vars['comments']->value)) {?>
	  <p>No comments found</p>
	  <?php } else { ?>
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
	  <div class="comments">
	    Comment by <strong><?php echo $_smarty_tpl->tpl_vars['comment']->value['author'];?>
</strong> on <?php echo $_smarty_tpl->tpl_vars['comment']->value['created'];?>
<br />
		<strong><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</strong><br />
		<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_text'];?>
<br />
		<a href="del_comment.php?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
&commentid=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
">Delete</a>
	  </div>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  <br />
	  <?php }?>
      
	  <p>
	    <a href="article.php?blogid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">Back to article</a>
	  </p>

      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
