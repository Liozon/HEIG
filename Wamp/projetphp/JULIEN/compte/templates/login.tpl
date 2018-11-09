{include file='head.tpl'}
<h1>Se connecter</h1>
<form class="" action="" method="post">
  {if isset($error_message)}
  <div>
    <p class="uk-label uk-label-danger">{$error_message}</p>
  </div>
  {/if}
  <input type="text" name="username" value="" placeholder="Username">
  <input type="password" name="password" value="" placeholder="Password">
  <input type="submit" value="Se connecter">
</form>
<p>Pas encore de compte ? <a href="register.php">Créez-en un !</a></p>
{include file='footer.tpl'}
