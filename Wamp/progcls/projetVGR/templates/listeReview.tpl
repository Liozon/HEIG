{include file="html.tpl"}
	<div id="liste">
		<h1>Liste des reviews</h1>
		<p>Vous trouverez sur cette page la liste complète des reviews de jeux vidéos disponibles !</p>
		{foreach $reviews as $record}
			<hr with="100%">
			<h2>{$record.nom}</h2>
			<p id="avis">Avis :</p>
			{$record.avis}
			<p id="note">Note : <b>{$record.note}</b>/10</p>
			<p id="date">Date de publication: {$record.date}</p>
		{/foreach}
	</div>
{include file="htmlFin.tpl"}