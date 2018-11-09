{include file="header.tpl"}

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

<div>
  Il y a {$nombre_enregistrements} enregistrements dans la table.
</div>

{include file="footer.tpl"}