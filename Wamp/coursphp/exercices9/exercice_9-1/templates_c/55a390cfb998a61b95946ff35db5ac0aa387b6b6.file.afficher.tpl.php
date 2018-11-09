<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-21 22:17:21
         compiled from "./templates/afficher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88831361552def1f1c56e07-94235259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a390cfb998a61b95946ff35db5ac0aa387b6b6' => 
    array (
      0 => './templates/afficher.tpl',
      1 => 1385736010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88831361552def1f1c56e07-94235259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contacts' => 0,
    'nombre_enregistrements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52def1f1e9dc26_91860822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52def1f1e9dc26_91860822')) {function content_52def1f1e9dc26_91860822($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['name'] = "un_contact";
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["un_contact"]['total']);
?>
  <div>
    Nom : <b><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['un_contact']['index']]['nom'];?>
</b><br />
    Prenom : <b><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['un_contact']['index']]['prenom'];?>
</b><br />
    Email : <a href ="mailto:<?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['un_contact']['index']]['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['un_contact']['index']]['email'];?>
</a><br />
  </div>
  <hr />
<?php endfor; else: ?>
  <div>
    <b>Aucun contact trouvé</b>
  </div>
<?php endif; ?>

<div>
  Il y a <?php echo $_smarty_tpl->tpl_vars['nombre_enregistrements']->value;?>
 enregistrements dans la table.
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>