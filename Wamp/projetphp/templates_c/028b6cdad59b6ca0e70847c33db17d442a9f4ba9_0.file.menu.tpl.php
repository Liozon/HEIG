<?php
/* Smarty version 3.1.30, created on 2018-01-16 08:13:28
  from "C:\Wamp\www\projetphp\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5db428897350_45782405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028b6cdad59b6ca0e70847c33db17d442a9f4ba9' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\templates\\menu.tpl',
      1 => 1516089133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5db428897350_45782405 (Smarty_Internal_Template $_smarty_tpl) {
?>
</head>
<body marginheight="0" marginwidth="0">

<center>
<div class="container">
<?php if (empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
  <div class="login">
	<form action="login_check.php" method="post" name="form_login">
	  Username: <input name="username" type="text" class="login_username" maxlength="30" />
      Password: <input type="password" name="password" class="login_password" />
	  <input class="login_button" name="login" type="submit" value="Login" />
	</form>
  </div>
<?php } else { ?>
  <div class="logged">
    Logged in as: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 | <a href="logout.php" class="logout">Logout</a>
  </div>
<?php }?>

  <div class="header"></div>
  
  <table cellspacing="0" class="middle">
    <tr>
	  <td class="menu">
	  <!-- MENU -->
        <br />
<?php if (empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
		- <a class="menu-link" href="register.php">Register</a><br />
		<br />
<?php }?>
		- <a class="menu-link" href="index.php">View blogs</a><br />
		- <a class="menu-link" href="browse_tags.php">Browse tags</a><br />
	    - <a class="menu-link" href="doc.php">Documentation</a><br />
<?php if (!empty($_smarty_tpl->tpl_vars['userid']->value)) {?>
		<br />
		User Menu<br />
		- <a class="menu-link" href="create_blog.php">Create blog</a><br />
  <?php if ($_smarty_tpl->tpl_vars['userhasblog']->value) {?>
		- <a class="menu-link" href="myblogs.php">My blogs</a><br />
  <?php }
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['blogid']->value)) {?>
		<br />
		Blog Menu<br />
        - <a class="menu-link" href="view_articles.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blogid']->value;?>
">View Articles</a><br />
<?php }
if (!empty($_smarty_tpl->tpl_vars['userid']->value) && !empty($_smarty_tpl->tpl_vars['blogid']->value) && !empty($_smarty_tpl->tpl_vars['blogownerid']->value) && $_smarty_tpl->tpl_vars['userid']->value == $_smarty_tpl->tpl_vars['blogownerid']->value) {?>
        - <a class="menu-link" href="add_article.php?blogid=<?php echo $_smarty_tpl->tpl_vars['blogid']->value;?>
">Add Article</a><br />
<?php }?>
      </td>
      <td class="menu_separator"></td>
      <td class="content">
	  <?php }
}
