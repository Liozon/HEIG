{include file='head.tpl'}
<div class="uk-container-large uk-container">
  <ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Mes challenges</a></li>
    <li><a href="#">Créer un challenge</a></li>
    <li><a href="#">Mon compte</a></li>
  </ul>
  <ul class="uk-switcher uk-margin">
    <li>
      <h3>Mes challenges à compléter</h3>
      <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid>
        {foreach $challengesToComplete as $challenge}
        <div class="uk-width-1-3">
          <div class="uk-card uk-card-default uk-card-body">
            {if isset($challenge.categorie)}
            <div class="uk-card-badge uk-label uk-label-success">{$challenge.categorie}</div>
            {/if}
            <div class="description">
              {$challenge.description}
            </div>
            <div class="bouton">
              <a href="index.php?valid={$challenge.id}"><button type="button" class="uk-button uk-button-primary">Je l'ai fait</button></a>
            </div>
          </div>
        </div>
        {/foreach}
      </div>
      <h3>Mes challenges complétés</h3>
      <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid" uk-grid>
        {foreach $completedChallenges as $challenge}
        <div class="uk-width-1-3">
          <div class="uk-card uk-card-default uk-card-body">
            {if isset($challenge.categorie)}
            <div class="uk-card-badge uk-label uk-label-success">{$challenge.categorie}</div>
            {/if}
            <div class="description">
              {$challenge.description}
            </div>
            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text={$challenge.description} - Crée et participe à des challenges personnels!"></a>
          </div>
        </div>
        {/foreach}
      </div>
    </li>
    <li>
      <div class="uk-width-1-3">
        <h3>Créer un challenge</h3>
        <form action="" method="post">
          <div class="uk-margin">
            <select class="uk-select" name="category">
              {foreach $categories as $category}
              <option value="{$category.id}">{$category.nom}</option>
              {/foreach}
            </select>
          </div>
          <div class="uk-margin">
            <textarea class="uk-textarea" name="description"></textarea>
          </div>
          <div class="uk-margin">
            <input type="submit" name="" value="Créer le challenge" class="uk-button uk-button-primary">
          </div>
        </form>
      </div>
    </li>
    <li>
      <h3>Mon compte</h3>
      <form action="" method="post">
        <div class="uk-margin">
          <input type="submit" name="disconnect" value="Se déconnecter" class="uk-button uk-button-primary">
        </div>
      </form>
      <h4>Changer mon mot de passe</h4>
      <div class="uk-width-1-3">
        <form action="" method="post">
          <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Nouveau mot de passe" name="newPassword">
          </div>
          <div class="uk-margin">
            <input type="submit" name="" value="Changer de mot de passe" class="uk-button uk-button-primary">
          </div>
        </form>
      </div>
    </li>
  </ul>

</div>
{include file='footer.tpl'}
