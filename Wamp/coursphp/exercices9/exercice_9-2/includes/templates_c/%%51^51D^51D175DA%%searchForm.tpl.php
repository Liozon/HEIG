<?php /* Smarty version 2.6.13, created on 2009-03-06 14:17:23
         compiled from searchForm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>