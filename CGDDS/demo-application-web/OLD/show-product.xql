xquery version "1.0" encoding "utf-8";

declare namespace request="http://exist-db.org/xquery/request";
declare option exist:serialize "method=html5 media-type=text/html omit-xml-declaration=yes encoding=utf-8 indent=yes";

import module namespace util="http://exist-db.org/xquery/util";

let $p_product :=  request:get-parameter("product", "")
let $product := doc($p_product)/product

return
    <html lang="fr">
        <head>
            <meta charset="utf-8"/>
            <title>Produit du catalogue Bächli...</title>
            <link rel="stylesheet" media="screen" type="text/css" href="styles.css" />
        </head>
		<body>
			<div id="main">
				<h1>Produit du catalogue Bächli...</h1>
				<div id="source">
					<h2>Auteur</h2>
					<p><span class="label">Nom: </span>{data($product/meta/source/firstName)}&#160;{data($product/meta/source/lastName)}&#160;(groupe {data($product/meta/source/@groupeId)})</p>
				</div>
				<div id="product">
					<h2>Produit: {data($product/data/name)}</h2>
					<dl>
						<dt>Catégorie</dt>
						<dd>{data($product/data/category)}</dd>
						<dt>Marque</dt>
						<dd>{data($product/data/brand)}</dd>
						<dt>Description</dt>
						<dd>{data($product/data/description)}</dd>
						<dt>Prix</dt>
						<dd>{data($product/data//price)}</dd>
					</dl>
					<div><img src="http://localhost:8080/exist/rest{replace(util:collection-name($product), 'xmlDocuments', 'illustrations')}/{data($product/data/imageId)}.png" /></div>
				</div>
			</div>
		</body>
	</html>