<?php
/* Smarty version 3.1.30, created on 2018-01-16 10:27:18
  from "C:\Wamp\www\projetphp\templates\blog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dd386db8631_84626276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f27f3e58e49149d6e8f00f11c6f7ea076dcd79ce' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\blog.tpl',
      1 => 1516090862,
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
function content_5a5dd386db8631_84626276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'blogid'=>$_smarty_tpl->tpl_vars['blog']->value['id'],'blogownerid'=>$_smarty_tpl->tpl_vars['blog']->value['userid'],'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

	<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  

	  <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</h1>
	  <p>
	   <?php echo $_smarty_tpl->tpl_vars['blog']->value['summary'];?>

	  </p>
	  <div class="author"><em>by <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</em></div>
	  <div class="art_date "><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['created'], ENT_QUOTES, 'UTF-8', true);?>
</div>
	  <h2 class="subtitle">Articles récents</h2>
	  <p>
	    <?php if (empty($_smarty_tpl->tpl_vars['articles']->value)) {?>Aucun article trouvé<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
		- <a href="article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>
</a> by <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
<br />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  </p>
	  
      
      
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
