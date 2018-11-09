

<div id="desc_prod" class="uk-container">
  <p> <span class="outofthebox">OUT OF THE BOX</span> est une application qui te permet de relever des défis pour sortir de ta zone de confort. N'hésite pas à parcourir les différentes catégories et à créer tes propres challenges! Tu peux également partager tes exploits avec tes amis sur facebook en cliquant sur l'icone.</p>
  <p> Dans une version ultérieure tu pourras lancer des challenges à tes amis et voir tes statistiques alors surveille bien les mises à jours ;-)</p>
</div>
<h1>Challenges:</h1>

<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
  {foreach $challenges as $row}
  <div class="uk-width-1-3">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-4@m">
      {if isset($row.categorie)}
        <div class="uk-card-badge uk-label uk-label-success">{$row.categorie}</div>
      {/if}
        <div class="description">
          {$row.description}
        </div>
        <div class="nbInscrit">
          <span class="nb nb_inscrits"> {$row.nb_inscrits}  </span>  personne(s) sont inscrites
        </div>
        <div class="nbreleve">
          <span class="nb nb_succeeded">{if $row.nb_succeeded == null} 0 {else}{$row.nb_succeeded}{/if}</span> personne(s) ont relevés ce challenge !
        </div>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={$row.description} - Crée et participe à des challenges!"></a>
        <div class="bouton">
          <button type="button" class="button_inscription uk-button uk-button-default" data-id="{$row.id}">s'inscrire</button>
          <div class="connexion-msg"> Connecte-toi :D </div>
          <div class="inscription-msg"> Tu es déjà inscrit(e) ! </div>
          <div class="inscription-reussi-msg"> Tu es bien inscrit(e) ! </div>

        </div>
      </div>
    </div>
    {/foreach}
  </div>
