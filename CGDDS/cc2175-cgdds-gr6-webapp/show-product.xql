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
            <title>{data($product/data/name)} - Bächli</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		    <script src="./js/overlay.js"></script>
            <link rel="stylesheet" media="screen" type="text/css" href="css/overlay.css" />
        </head>
		<body>
			<div id="main">
				<h1 class="iframeh1">{data($product/data/name)} - Bächli</h1>
				<div id="source">
					<h2>Auteur</h2>
					<p><span class="label">Nom: </span>{data($product/meta/source/firstName)}&#160;{data($product/meta/source/lastName)}&#160;(groupe {data($product/meta/source/@groupeId)})</p>
				</div>
				<hr/>
				<div id="product">
					<h2 class="productname">Produit: {data($product/data/name)}</h2>
					<dl class="clearfix">
					    <div><img src="http://localhost:8080/exist/rest{replace(util:collection-name($product), 'xmlDocuments', 'illustrations')}/{data($product/data/imageId)}.jpeg" onerror='this.onerror=null; this.src="http://localhost:8080/exist/rest{replace(util:collection-name($product), 'xmlDocuments', 'illustrations')}/{data($product/data/imageId)}.jpg"' alt="{data($product/data/name)}" /></div>
						<dt class="category">Catégorie</dt>
						<dd class="dd">{data($product/data/category)}</dd>
						<dt>Marque</dt>
						<dd>{data($product/data/brand)}</dd>
						<dt>Description</dt>
						<dd>{data($product/data/description)}</dd>
						<dt>Prix</dt>
						<dd class="price">{data($product/data//price)}</dd>
					</dl>
				</div>
			</div>
		</body>
	</html>