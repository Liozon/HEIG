{include file="header.tpl"}

<h3>Résultats de votre requête</h3>

{section name="un_contact" loop=$contacts}
  <div>
    Nom : <b>{$contacts[un_contact].nom}</b><br />
    Prenom : <b>{$contacts[un_contact].prenom}</b><br />
    Email : <a href ="mailto:{$contacts[un_contact].email}">{$contacts[un_contact].email}</a><br />
  </div>
  <hr />
{sectionelse}
  <div>
    <b>Aucun contact trouvé</b>
  </div>
{/section}

{if $nombre_enregistrements > 1}
  <div>
    {$nombre_enregistrements} enregistrements trouvés dans la table.
  </div>
{/if}

{include file="footer.tpl"}