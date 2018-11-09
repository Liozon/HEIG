<?php
/* Smarty version 3.1.30, created on 2017-02-26 19:10:02
  from "C:\wamp64\www\coursphp\ProjetPHP_Porchet\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b3280a1d9808_23621828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f82b3864386bf12b0d93ffcc7544d093e8b703' => 
    array (
      0 => 'C:\\wamp64\\www\\coursphp\\ProjetPHP_Porchet\\index.tpl',
      1 => 1488136168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b3280a1d9808_23621828 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
    <head>
        <title>Projet PHP - Cécile Porchet</title>
		
		<!-- liens jquery, bootstrap, fontawesome -->
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
		
		<!-- création de la barre du menu  -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projet PHP</a>
                </div>
                <button class="btn btn-default navbar-btn" style="float:right;" onclick="location.href = 'reservations.php';">Réservations</button>
            </div>
        </nav>
		
		<!-- création du tableau -->
            <table class="table table-bordered" id="tableauArticles">
                <thead>
                <tr>
                    <th>Genre</th>
                    <th>Prix Initial</th>
                    <th>Prix Rabais</th> 
                    <th>Pourcentage de Rabais</th>
                    <th>Date de Peremption</th>
                    <th>Description</th>
                    <th>Fournisseur</th>
                    <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                <?php echo $_smarty_tpl->tpl_vars['tableau']->value;?>

                </tbody>
				<!-- création d'un pop-up qui donne les informations du fournisseur -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Information sur le fournisseur</h4>
                            </div>
                            <div class="modal-body" id="informationFournisseur">
                                <h4 id="Nom"></h4>
                                <h5 id="Adresse"></h5>
                                <h5 id="Ville"></h5>
                            </div>
                            <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- création d'un pop-up qui demande qui est le client -->
                <div class="modal fade" id="modalReservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Réservation</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="sel1">Qui êtes-vous?:</label>
                                    <select class="form-control" id="sel1" onchange="changeFunc(value);">
										<!-- liste les clients -->
                                       <?php echo $_smarty_tpl->tpl_vars['options']->value;?>
 
                                    </select>
                                </div>
                            </div>
                           
							<!-- Bouton pour pouvoir réserver l'article -->
                            <div class="modal-footer">    
                                <button type="button" class="btn btn-default" onclick="reserver()">Réserver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </table>

            <?php echo '<script'; ?>
>
				// du JavaScript pour dynamiser l'interface
            var userSelected = -1;
            var articleSelected = -1;

				// sélectionner le client
            function changeFunc(newuser) {
                userSelected = newuser;
            } 
				
				// ajout des fonctionnalités de recherche et de tri.
            $(document).ready(function() {
                $('#tableauArticles').DataTable();
            });
            
				
            $('.buttonInfoFournisseur').click(function() {
                $.ajax({
                    type: "POST",
                    url: "informationFournisseur.php",
                    data: {
                        fid: $(this).attr('fid')
                    }
					
					// on appelle la fonction quand la requête sql est terminée et affiche le nom demandé 
                }).done(function( msg ) {
                    var infoFournisseur = JSON.parse(msg);
                    $('#Nom').html(infoFournisseur['Nom']);
                    $('#Adresse').html(infoFournisseur['Adresse']);
                    $('#Ville').html(infoFournisseur['Ville']);
                    $('#myModal').modal('show');
                });    
            });

					// garde l'article sélectionné lorsque l'on clique sur réservation 
            $('.buttonReserver').click(function(aid) {
                articleSelected = aid;
                $('#modalReservation').modal('show');
            });
				
				// permet de reserver un article avec une requête ajax 
            function reserver() {
                $.ajax({
                    type: "POST",
                    url: "reserver.php",
                    data: {
                        fid : userSelected,
                        aid : articleSelected
                    }
					// quand la requête est terminée, le pop-up part. 
                }).done(function( msg ) {
                    $('#modalReservation').modal('hide');
                });    
            }
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
