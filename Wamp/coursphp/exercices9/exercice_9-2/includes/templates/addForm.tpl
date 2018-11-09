{include file="header.tpl"}

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

{include file="footer.tpl"}