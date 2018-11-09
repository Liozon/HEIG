{include file="header.tpl"}

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

{include file="footer.tpl"}