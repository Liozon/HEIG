{include file="html.tpl"}
<h1>Ajoute ta review !</h1>
<p> Sur cette page, vous pouvez ajouter votre propre review d'un jeu vidéo.</p>
<form method="POST" action="index.php?id=addReview" onsubmit="return confirm('Veuillez confirmer votre review svp');">
	<p>Nom du jeu vidéo :</p>
	<input type="text" name="nom" size="50">
	<p>Avis :</p>
	<textarea name="avis" rows="10" cols="47"></textarea>
	<p>Note (sur 10) :</p>
	<input type="number" name="note" min="0" max="10">
	<p>Date de la review :</p>
	<input type="date" name="date" size="50">
	<p>/!\ Tous les champs sont obilgatoires /!\</p>
	<p><button type="submit" name="button">Ajouter</button></p>
</form>
{include file="htmlFin.tpl"}