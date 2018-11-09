<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-21 22:37:37
         compiled from "./templates/formulaireRecherche.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59919247652def6b1dbc140-90986618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8812cf6b0d6d16fd095c688e97b7518eb955d6c9' => 
    array (
      0 => './templates/formulaireRecherche.tpl',
      1 => 1385736010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59919247652def6b1dbc140-90986618',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52def6b1dd9910_87506184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52def6b1dd9910_87506184')) {function content_52def6b1dd9910_87506184($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<form id="chercher" method="post" action="">
  <p>
    Début du nom :
    <input type="text" name="str" size="10" />
  </p>

  <p>
    Ordre de tri :
    <select name="tri">
      <option selected="selected">nom</option>
      <option>prenom</option>
      <option>email</option>
    </select>
  </p>
  <p>
    <input type="hidden" name="action" value="afficherResultatsRecherche"/>
    <input type="submit" name="chercher" value="Lancer la recherche"/>
  </p>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>