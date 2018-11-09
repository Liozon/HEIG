<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:34:16
  from "C:\Wamp\www\projetphp\templates\view_articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd528392d67_58002561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b73a7ffa434b89efbf917f3d80ff48c649742ce' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\view_articles.tpl',
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
function content_5a5dd528392d67_58002561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

	<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  

	  <h1 class="title">Article list</h1>
      <center>
	    <?php if (empty($_smarty_tpl->tpl_vars['articles']->value)) {?>
		No articles found
		<?php } else { ?>
		<table class="article_list">
		  <tr>
		    <th class="article_list_th">Headline</th>
			<th class="article_list_th">Author</th>
		  </tr>
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
		  <tr>
		    <td class="article_list_row1"><a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</a></td>
			<td class="article_list_row2"><?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</td>
		  </tr>
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>

<p>
<?php if ($_smarty_tpl->tpl_vars['prev_offset']->value < 0) {?>
  First | Previous
<?php } else { ?>
  <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=0">First</a> | <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['prev_offset']->value;?>
">Previous</a>
<?php }?> |

<?php
$__section_pages_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_pages']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages'] : false;
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['num_articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_step = ((int)@$_smarty_tpl->tpl_vars['items_per_page']->value) == 0 ? 1 : (int)@$_smarty_tpl->tpl_vars['items_per_page']->value;
$__section_pages_0_start = min(0, $__section_pages_0_step > 0 ? $__section_pages_0_loop : $__section_pages_0_loop - 1);
$__section_pages_0_total = min(ceil(($__section_pages_0_step > 0 ? $__section_pages_0_loop - $__section_pages_0_start : $__section_pages_0_start+ 1)/ abs($__section_pages_0_step)), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new Smarty_Variable(array());
if ($__section_pages_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration'] <= $__section_pages_0_total; $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] += $__section_pages_0_step){
?>
  <?php if ($_smarty_tpl->tpl_vars['offset']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null)) {?>
    <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration'] : null);?>
 | 
  <?php } else { ?>
    <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['iteration'] : null);?>
</a> |
  <?php }?>
  
<?php
}
}
if ($__section_pages_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = $__section_pages_0_saved;
}
?>

<?php if ($_smarty_tpl->tpl_vars['next_offset']->value >= $_smarty_tpl->tpl_vars['num_articles']->value) {?>
  Next | Last
<?php } else { ?>
  <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['next_offset']->value;?>
">Next</a> | <a href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&offset=<?php echo $_smarty_tpl->tpl_vars['num_articles']->value-1;?>
">Last</a>
<?php }?>
		<?php }?>
	  </center>
      
      
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
