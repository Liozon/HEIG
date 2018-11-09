<?php
/* Smarty version 3.1.30, created on 2018-01-16 11:03:08
  from "C:\Wamp\www\projetphp\JULIEN\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5ddbece94353_16602384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb58f8f61f1b163fed86d0d9f6503a296aab6c6d' => 
    array (
      0 => 'C:\\Wamp\\www\\projetphp\\JULIEN\\templates\\header.tpl',
      1 => 1516089805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5ddbece94353_16602384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/uikit.min.css" />
  <link rel="stylesheet" href="css/style.css" />

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
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js" charset="utf-8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));<?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/script.js" charset="utf-8"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/uikit.min.js"><?php echo '</script'; ?>
>
  <meta charset="utf-8">
  <title>OUT OF THE BOX</title>
</head>
<body class="uk-container-large uk-container">

<header>
  <h1> <img id="logo" src="images/logo.svg" alt="logo" />
    Sors de ta zone de confort!</h1>
    </header>
  <ul class="uk-tab">
  <li aria-expanded="true">   <a href="index.php">Accueil</a> </li>
  <li aria-expanded="true">    <a href="humain.php">Humain</a> </li>
  <li aria-expanded="true">    <a href="ecologie.php">Écologie</a> </li>
  <li aria-expanded="true">    <a href="culture.php">Culture</a> </li>
  <li aria-expanded="true">    <?php if (!isset($_smarty_tpl->tpl_vars['userid']->value)) {?><a href="compte/login.php">Connexion</a><?php } else { ?><a href="compte/index.php">Mon compte</a><?php }?> </li>
</ul>
<?php }
}
