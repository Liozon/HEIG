<?php /* Smarty version 2.6.18, created on 2008-04-14 15:47:02
         compiled from formulaireAjout.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>