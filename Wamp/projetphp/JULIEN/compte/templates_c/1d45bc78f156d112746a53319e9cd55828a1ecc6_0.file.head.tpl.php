<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:03:35
  from "C:\Wamp\www\projetphp\JULIEN\compte\templates\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddc072b2341_70076487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d45bc78f156d112746a53319e9cd55828a1ecc6' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\compte\\templates\\head.tpl',
      1 => 1516089811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ddc072b2341_70076487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon compte - Out of the box</title>
    <?php echo '<script'; ?>
 type="text/javascript">
    <?php if (isset($_smarty_tpl->tpl_vars['userid']->value)) {?>
    var userid = <?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
;
    <?php } else { ?>
    var userid = -1;
    <?php }?>
    <?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="../css/uikit.min.css">
    <link rel="stylesheet" href="../css/admin.css">
  </head>
    <body class="uk-container-large uk-container">

    <header>
      <h1> <img id="logo" src="../images/logo.svg" alt="logo" />
        Sors de ta zone de confort!</h1>
        </header>
      <ul class="uk-tab">
      <li aria-expanded="true"><a href="../index.php">Accueil</a></li>
      <li aria-expanded="true"><a href="../humain.php">Humain</a></li>
      <li aria-expanded="true"><a href="../ecologie.php">Écologie</a></li>
      <li aria-expanded="true"><a href="../culture.php">Culture</a></li>
      <li aria-expanded="true"><?php if (!isset($_smarty_tpl->tpl_vars['userid']->value)) {?><a href="login.php">Connexion</a><?php } else { ?><a href="index.php">Mon compte</a><?php }?> </li>
    </ul>
<?php }
}
