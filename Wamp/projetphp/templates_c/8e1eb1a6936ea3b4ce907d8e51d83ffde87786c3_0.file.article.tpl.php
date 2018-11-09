<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:27:37
  from "C:\Wamp\www\projetphp\templates\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd399cc29e6_99187358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1eb1a6936ea3b4ce907d8e51d83ffde87786c3' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\article.tpl',
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
function content_5a5dd399cc29e6_99187358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
      <h1 class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['headline'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
      <div class="article">
        <?php echo $_smarty_tpl->tpl_vars['details']->value['article_body'];?>

      </div>
	  <?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)) {?>
	  <br />
	  <div class="photos">
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
  		<img src="get_image.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['photo']->value['imagesize'];?>
 alt="<?php echo $_smarty_tpl->tpl_vars['photo']->value['imagename'];?>
"> 
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  </div>
	  <?php }?>
      <br />
      <div class="author"><em>by <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</em></div>
	  <div class="art_date "><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['details']->value['created'], ENT_QUOTES, 'UTF-8', true);?>
</div>
      <div class="tags">Tags: <?php if (empty($_smarty_tpl->tpl_vars['tags']->value)) {?>none<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?><a href="search.php?s=tag&id=<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>
      <br />
	  
	  <h4>Add a comment</h4>
	  <?php if (empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
	  <p>You need to be logged to write a comment</p>
	  <?php } else { ?>
	  <form action="add_comment.php" method="post">
	    <table>
		  <tr>
		    <td class="comments_title">Title</td>
			<td><input type="text" name="title" class="comment_title_input" /></td>
		  </tr>
		  <tr>
		    <td class="comments_title">Comment</td>
			<td><textarea name="comment_text" class="comment_text_input"></textarea></td>
		  </tr>
		  <tr>
		    <td>&nbsp;</td>
			<td><input type="submit" name="add" value="Add comment" /></td>
		  </tr>
		</table>
		<input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
		<input type="hidden" name="articleid" value="<?php echo $_smarty_tpl->tpl_vars['details']->value['id'];?>
" />
	  </form>
	  <?php }?>
	  
	  <?php if (!empty($_smarty_tpl->tpl_vars['comments']->value)) {?>
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

	  </div>
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  <br />
	  <?php }?>
      <center>
      <table class="table_prev_next">
        <tr>
          <td class="table_prev_opt"><?php if ($_smarty_tpl->tpl_vars['prev_next']->value['prev'] > 0) {?><a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['prev_next']->value['prev'];?>
"><?php }?>Previous<?php if ($_smarty_tpl->tpl_vars['prev_next']->value['prev'] > 0) {?></a><?php }?></td>
		  <td class="table_next_opt"><?php if ($_smarty_tpl->tpl_vars['prev_next']->value['next'] > 0) {?><a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['prev_next']->value['next'];?>
"><?php }?>Next<?php if ($_smarty_tpl->tpl_vars['prev_next']->value['prev'] > 0) {?></a><?php }?></td>
        </tr>
      </table>
      </center>
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
