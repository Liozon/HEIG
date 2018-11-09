<?php
/* Smarty version 3.1.30, created on 2018-01-08 15:27:01
  from "C:\Wamp\www\coursphp\exercices9\exercice_9-1\templates\afficher.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a537fb5aed7b4_05090343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde0509e09aa1349f55e463d895d5ea6ed16523c' => 
    array (
      0 => 'C:\\Wamp\\www\\coursphp\\exercices9\\exercice_9-1\\templates\\afficher.tpl',
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
function content_5a537fb5aed7b4_05090343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$__section_un_contact_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_un_contact']) ? $_smarty_tpl->tpl_vars['__smarty_section_un_contact'] : false;
$__section_un_contact_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_un_contact_0_total = $__section_un_contact_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_un_contact'] = new Smarty_Variable(array());
if ($__section_un_contact_0_total != 0) {
for ($__section_un_contact_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index'] = 0; $__section_un_contact_0_iteration <= $__section_un_contact_0_total; $__section_un_contact_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index']++){
?>
  <div>
    Nom : <b><?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index'] : null)]['nom'];?>
</b><br />
    Prenom : <b><?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index'] : null)]['prenom'];?>
</b><br />
    Email : <a href ="mailto:<?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index'] : null)]['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_un_contact']->value['index'] : null)]['email'];?>
</a><br />
  </div>
  <hr />
<?php }} else {
 ?>
  <div>
    <b>Aucun contact trouvé</b>
  </div>
<?php
}
if ($__section_un_contact_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_un_contact'] = $__section_un_contact_0_saved;
}
?>

<div>
  Il y a <?php echo $_smarty_tpl->tpl_vars['nombre_enregistrements']->value;?>
 enregistrements dans la table.
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
