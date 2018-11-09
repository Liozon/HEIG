<?php
/* Smarty version 3.1.30, created on 2017-02-26 17:40:13
  from "/Users/fatonramadani/Desktop/code/HEIG/cec/reservation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b304ed462a25_99770133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e63eeddb6d9ae80cfbbdd643b38e71a96d3807b' => 
    array (
      0 => '/Users/fatonramadani/Desktop/code/HEIG/cec/reservation.tpl',
      1 => 1488127212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b304ed462a25_99770133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>Projet HEIG - Cécile Porchet</title>
        <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' type='text/css' href='css/index.css'>


        <?php echo '<script'; ?>
 src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">

        
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projet HEIG</a>
                </div>
                <button class="btn btn-default navbar-btn" style="float:right;" onclick="location.href = 'index.php';">Articles</button>
            </div>

        </nav>
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </body>
<html><?php }
}
