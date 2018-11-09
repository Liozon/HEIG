<?php
/* Smarty version 3.1.30, created on 2017-02-27 19:28:35
  from "/home/EINET/cecile.porchet/public_html/progcs/ProjetPHP_Porchet/reservation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b46fd341fe69_59063612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84bcac32e91b39eaad7a8d069bf880af8b783da1' => 
    array (
      0 => '/home/EINET/cecile.porchet/public_html/progcs/ProjetPHP_Porchet/reservation.tpl',
      1 => 1488193846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b46fd341fe69_59063612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>Projet PHP - Cécile Porchet</title>
		<!-- liens jquery, bootstrap, fontawesome utilisés pour l'interface -->
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
		<!-- page réservation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projet PHP</a>
                </div>
				<!-- bouton article -->
                <button class="btn btn-default navbar-btn" style="float:right;" onclick="location.href = 'index.php';">Articles</button>
            </div>

        </nav>
		<!-- article réservé par qui -->
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </body>
<html><?php }
}
