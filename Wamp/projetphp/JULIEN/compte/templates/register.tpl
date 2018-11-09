{include file='head.tpl'}
<h1>Créer votre compte</h1>
<form class="" action="" method="post">
  {if isset($error_message)}
    <p class="uk-label uk-label-danger">{$error_message}</p>
  {/if}
  <input type="text" name="username" value="" placeholder="Username">
  <input type="password" name="password" value="" placeholder="Password">
  <input type="submit" value="S'inscrire">
</form>
<p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous !</a></p>
{include file='footer.tpl'}
