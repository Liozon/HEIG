{include file="html.tpl"}
<h1>Créer un compte</h1>
<p><b>/!\ Cette page est en construction. Vous pouvez déjà remplir le formulaire d'inscription et, une fois le développement fini, vous aurez la possibilité de vous connecter à votre compte /!\</b></p>
<form method="POST" action="index.php">
	<p>Nom d'utilisateur :</p>
	<input type="text" name="user" size="50">
	<p>Mot de passe :</p>
	<input type="password" name="psw">
	<p>E-mail :</p>
	<input type="email" name="email" size="50">
	<p>Pays :</p>
	<input type="text" name="pays" size="50">
	<p>NPA :</p>
	<input type="number" name="npa" size="4">
	<p>Date de naissance :</p>
	<input type="date" name="birth">
	<p>/!\ Tous les champs sont obilgatoires /!\</p>
	<p><button type="submit" name="button">Inscription</button></p>
</form>
{include file="htmlFin.tpl"}