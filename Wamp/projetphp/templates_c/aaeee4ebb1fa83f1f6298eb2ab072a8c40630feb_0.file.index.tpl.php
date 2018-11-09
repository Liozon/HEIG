<?php
/* Smarty version 3.1.30, created on 2018-01-16 08:20:14
  from "C:\Wamp\www\projetphp\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5db5bec6e8e5_44922173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaeee4ebb1fa83f1f6298eb2ab072a8c40630feb' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\index.tpl',
      1 => 1516090813,
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
function content_5a5db5bec6e8e5_44922173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('userid'=>$_smarty_tpl->tpl_vars['userid']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value,'userhasblog'=>$_smarty_tpl->tpl_vars['userhasblog']->value), 0, false);
?>

	<!-- CONTENT -->
      <?php $_smarty_tpl->_subTemplateRender("file:search_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  

	  <h1 class="title">Voir les articles</h1>
	  <p>
	    <?php if (empty($_smarty_tpl->tpl_vars['blogs']->value)) {?>Aucun article à afficher pour l'instant<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
		- <a href="blog.php?id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>
</a> by <?php echo $_smarty_tpl->tpl_vars['blog']->value['author'];?>
<br />
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	  </p>

<p>
<?php if ($_smarty_tpl->tpl_vars['prev_offset']->value < 0) {?>
  Première page | Précédent
<?php } else { ?>
  <a href="index.php?offset=0">First</a> | <a href="index.php?offset=<?php echo $_smarty_tpl->tpl_vars['prev_offset']->value;?>
">Précédent</a>
<?php }?> |

<?php
$__section_pages_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_pages']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages'] : false;
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['num_blogs']->value) ? count($_loop) : max(0, (int) $_loop));
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
    <a href="index.php?offset=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null);?>
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

<?php if ($_smarty_tpl->tpl_vars['next_offset']->value >= $_smarty_tpl->tpl_vars['num_blogs']->value) {?>
  Suivant | Dernière page
<?php } else { ?>
  <a href="index.php?offset=<?php echo $_smarty_tpl->tpl_vars['next_offset']->value;?>
">Next</a> | <a href="index.php?offset=<?php echo $_smarty_tpl->tpl_vars['num_blogs']->value-1;?>
">Dernière page</a>
<?php }?>
	  
      
      
      <!-- END CONTENT -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
