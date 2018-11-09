<?php
/* Smarty version 3.1.30, created on 2018-01-08 15:27:20
  from "C:\Wamp\www\coursphp\exercices9\exercice_9-1\templates\formulaireAjout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a537fc8d833f4_70596394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0fc0a004062617d08f1a77c632a1dbede405f0e' => 
    array (
      0 => 'C:\\Wamp\\www\\coursphp\\exercices9\\exercice_9-1\\templates\\formulaireAjout.tpl',
      1 => 1385736010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a537fc8d833f4_70596394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form id="ajouter" method="post" action="?">
  <h3>Ajouter un enregistrement</h3>
  <table>
    <tr>
      <td>Titre</td>
      <td><input type="text" name="titre" /></td>
    </tr>
    <tr>
      <td>Nom</td>
      <td><input type="text" name="nom" /></td>
    </tr>
    <tr>
      <td>Prenom</td>
      <td><input type="text" name="prenom" /></td>
    </tr>
    <tr>
      <td>Adresse</td>
      <td><input type="text" name="adresse" /></td>
    </tr>
    <tr>
      <td>NPA</td>
      <td><input type="text" name="npa" /></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="email" /></td>
    </tr>
    <tr>
      <td>Téléphone</td>
      <td><input type="text" name="telephone" /></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><input type="text" name="mobile" /></td>
    </tr>
    <tr>
      <td>Commentaire</td>
      <td><input type="text" name="commentaire" /></td>
    </tr>
  </table>
  <div>
    <input type="hidden" name="action" value="ajouterDB" />
    <input type="submit" name="sauver" value="Ajouter" />
  </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
