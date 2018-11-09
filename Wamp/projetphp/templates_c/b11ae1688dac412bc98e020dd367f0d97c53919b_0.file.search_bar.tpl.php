<?php
/* Smarty version 3.1.30, created on 2018-01-16 08:13:28
  from "C:\Wamp\www\projetphp\templates\search_bar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5db428b655f4_50694701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11ae1688dac412bc98e020dd367f0d97c53919b' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\search_bar.tpl',
      1 => 1516089134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5db428b655f4_50694701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="search">
      <form action="search.php" method="get" name="form_search">
        Search 
        <select name="s" class="search_option">
           <option value="blog"<?php if (empty($_smarty_tpl->tpl_vars['searchmethod']->value) || $_smarty_tpl->tpl_vars['searchmethod']->value == "blog") {?> selected="selected"<?php }?>>Blogs</option>
           <option value="article"<?php if (!empty($_smarty_tpl->tpl_vars['searchmethod']->value) && $_smarty_tpl->tpl_vars['searchmethod']->value == "article") {?> selected="selected"<?php }?>>Articles</option>
           <option value="tag"<?php if (!empty($_smarty_tpl->tpl_vars['searchmethod']->value) && $_smarty_tpl->tpl_vars['searchmethod']->value == "tag") {?> selected="selected"<?php }?>>Articles using tags</option>
        </select>
        <input class="search_text" name="text" type="text"<?php if (!empty($_smarty_tpl->tpl_vars['searchquery']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['searchquery']->value;?>
"<?php }?> />
        <input class="search_button" name="search" type="submit" value="Search" />
      </form>
      </div>
	  <?php }
}
