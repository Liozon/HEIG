<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-21 22:37:54
         compiled from "./templates/formulaireAjout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110837954852def6c270daf5-08575811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2eb6ed37417bc7fdee758911d70d7d77404d7b' => 
    array (
      0 => './templates/formulaireAjout.tpl',
      1 => 1385736010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110837954852def6c270daf5-08575811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52def6c272f447_55449452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52def6c272f447_55449452')) {function content_52def6c272f447_55449452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>