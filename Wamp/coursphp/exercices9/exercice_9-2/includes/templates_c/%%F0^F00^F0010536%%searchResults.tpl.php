<?php /* Smarty version 2.6.13, created on 2010-04-15 09:15:44
         compiled from searchResults.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3>Résultats de votre requête</h3>

<?php unset($this->_sections['un_contact']);
$this->_sections['un_contact']['name'] = 'un_contact';
$this->_sections['un_contact']['loop'] = is_array($_loop=$this->_tpl_vars['contacts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['un_contact']['show'] = true;
$this->_sections['un_contact']['max'] = $this->_sections['un_contact']['loop'];
$this->_sections['un_contact']['step'] = 1;
$this->_sections['un_contact']['start'] = $this->_sections['un_contact']['step'] > 0 ? 0 : $this->_sections['un_contact']['loop']-1;
if ($this->_sections['un_contact']['show']) {
    $this->_sections['un_contact']['total'] = $this->_sections['un_contact']['loop'];
    if ($this->_sections['un_contact']['total'] == 0)
        $this->_sections['un_contact']['show'] = false;
} else
    $this->_sections['un_contact']['total'] = 0;
if ($this->_sections['un_contact']['show']):

            for ($this->_sections['un_contact']['index'] = $this->_sections['un_contact']['start'], $this->_sections['un_contact']['iteration'] = 1;
                 $this->_sections['un_contact']['iteration'] <= $this->_sections['un_contact']['total'];
                 $this->_sections['un_contact']['index'] += $this->_sections['un_contact']['step'], $this->_sections['un_contact']['iteration']++):
$this->_sections['un_contact']['rownum'] = $this->_sections['un_contact']['iteration'];
$this->_sections['un_contact']['index_prev'] = $this->_sections['un_contact']['index'] - $this->_sections['un_contact']['step'];
$this->_sections['un_contact']['index_next'] = $this->_sections['un_contact']['index'] + $this->_sections['un_contact']['step'];
$this->_sections['un_contact']['first']      = ($this->_sections['un_contact']['iteration'] == 1);
$this->_sections['un_contact']['last']       = ($this->_sections['un_contact']['iteration'] == $this->_sections['un_contact']['total']);
?>
  <div>
    Nom : <b><?php echo $this->_tpl_vars['contacts'][$this->_sections['un_contact']['index']]->nom; ?>
</b><br />
    Prenom : <b><?php echo $this->_tpl_vars['contacts'][$this->_sections['un_contact']['index']]->prenom; ?>
</b><br />
    Email : <a href ="mailto:<?php echo $this->_tpl_vars['contacts'][$this->_sections['un_contact']['index']]->email; ?>
"><?php echo $this->_tpl_vars['contacts'][$this->_sections['un_contact']['index']]->email; ?>
</a><br />
  </div>
  <hr />
<?php endfor; else: ?>
  <div>
    <b>Aucun contact trouvé</b>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['nombre_enregistrements'] > 1): ?>
  <div>
    <?php echo $this->_tpl_vars['nombre_enregistrements']; ?>
 enregistrements trouvés dans la table.
  </div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>