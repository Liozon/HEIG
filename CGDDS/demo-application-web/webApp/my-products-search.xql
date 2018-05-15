xquery version "1.0" encoding "utf-8";

declare namespace request="http://exist-db.org/xquery/request";
declare option exist:serialize "method=html5 media-type=text/html omit-xml-declaration=yes encoding=utf-8 indent=yes";

import module namespace util="http://exist-db.org/xquery/util";

declare function local:showResults($collection, $category, $brand, $priceMin, $priceMax)
{
    let $whereClauseTmp := 
    concat(
        if ($category != "")
        then concat("$product/data/category=""", $category, """ and ") 
        else "",
        if ($brand != "")
        then concat("$product/data/brand=""", $brand, """ and ")
        else "",
        if ($priceMin != "")
        then concat("$product/data//price[1] >= ", $priceMin, " and ")
        else "",
        if ($priceMax != "")
        then concat("$product/data//price[1] <= ", $priceMax, " and ")
        else ""
    )
    
    let $whereClause :=
        if ($whereClauseTmp != "")
        then substring($whereClauseTmp, 1, string-length($whereClauseTmp) - 5) 
        else "$product"
    
    return
        
<div id="resultats">
	<h2>Résultats de la recherche</h2>
	<p>Paramètre "category": {$category}</p>
	<p>Paramètre "brand": {$brand}</p>
	<p>Paramètre "priceMin": {$priceMin}</p>
	<p>Paramètre "priceMax": {$priceMax}</p>
	<p>Clause "where" de la requête: {$whereClause}</p>
	<table>
		<tr>
			<th>
                        Id
                    </th>
			<th>
                        Catégorie
                    </th>
			<th>
                        Marque
                    </th>
			<th>
                        Nom du produit
                    </th>
			<th>
                        Prix
                    </th>
		</tr>
        {
            for $product at $i in $collection//product
            where util:eval($whereClause)
            order by $product/data/category, $product/data/brand, $product/data/name
            return
                
		<tr>
			<td>
                        {
                            
				<a href="show-product.xql?product={util:collection-name($product)}/{util:document-name($product)}">{$i}</a>
                        }
                    
			</td>
			<td>
                        {data($product/data/category)}
                    </td>
			<td>
                        {data($product/data/brand)}
                    </td>
			<td>
                        {data($product/data/name)}
                    </td>
			<td>
                        {data($product//price)}
                    </td>
		</tr>
        }
            
	</table>
</div>
};

let $p_category :=  request:get-parameter("category", "")
let $p_brand := request:get-parameter("brand", "")
let $p_priceMin := request:get-parameter("priceMin", "")
let $p_priceMax := request:get-parameter("priceMax", "")
let $p_submit := request:get-parameter("submit", "")

let $collection := collection("/db/cgdds/cc2175/baechli-products")

return
    
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Baechli - Recherche d'articles</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="./js/isotope.pkgd.min.js"></script>
		<script src="./js/script.js"></script>
		<script src="./js/script2.js"></script>
		<link rel="stylesheet" media="screen" type="text/css" href="css/styles.css" />
	</head>
	<body>
		<h1>Baechli - Recherche d'article</h1>
		<h2>Catégories de recherche:</h2>
		<form id="champs-recherche" action="" method="get">
		<div id="category">
				<label for="categoryList">Catégorie:</label>
				<select class="dropdown dropdown1 custom-select" id="categoryList" name="category">
					<option value="">Choisir une catégorie...</option>
    {
        for $category in distinct-values($collection//category)
        order by lower-case($category)
        return 
        if (data($category)=$p_category)
        then 
					<option selected="selected">{data($category)}</option>
        else 
					<option value="{data($category)}">{data($category)}</option>
    }
                                
				</select>
		</div>
		<div id="brand">
			<p>
				<label for="brandList">Marque:</label>
				<select class="dropdown dropdown2" id="brandList" name="brand">
					<option value="">Choisir une marque...</option>
    {
        for $brand in distinct-values($collection//brand)
        order by lower-case($brand)
        return 
        if (data($brand)=$p_brand)
        then 
					<option selected="selected">{data($brand)}</option>
        else 
					<option value="{data($brand)}">{data($brand)}</option>
    }
                                
				</select>
			</p>
		</div>
			<div>
			<input class="button" id="submitButton" name="submit" type="submit" value="Rechercher"/>
		</div>
		</form>
		<div class="result hidden">
		<h2>Trier par</h2>
		<div id="sorts" class="button-group">
			<button class="button is-checked" data-sort-by="original-order">Par défaut</button>
			<button class="button" data-sort-by="name">Nom</button>
			<button class="button" data-sort-by="symbol">Catégorie</button>
			<button class="button" data-sort-by="number">Prix croissant</button>
			<button class="button" data-sort-by="weight">Prix décroissant</button>
			<button class="button" data-sort-by="category">category</button>
		</div>
		<div class="grid">
			<div class="element-item transition metal " data-category="transition">
				<h3 class="name">Mercury</h3>
				<p class="symbol">Hg</p>
				<p class="number">80</p>
				<p class="weight">200.59</p>
			</div>
			<div class="element-item metalloid " data-category="metalloid">
				<h3 class="name">Tellurium</h3>
				<p class="symbol">Te</p>
				<p class="number">52</p>
				<p class="weight">127.6</p>
			</div>
			<div class="element-item post-transition metal " data-category="post-transition">
				<h3 class="name">Bismuth</h3>
				<p class="symbol">Bi</p>
				<p class="number">83</p>
				<p class="weight">208.980</p>
			</div>
			<div class="element-item post-transition metal " data-category="post-transition">
				<h3 class="name">Lead</h3>
				<p class="symbol">Pb</p>
				<p class="number">82</p>
				<p class="weight">207.2</p>
			</div>
			<div class="element-item transition metal " data-category="transition">
				<h3 class="name">Gold</h3>
				<p class="symbol">Au</p>
				<p class="number">79</p>
				<p class="weight">196.967</p>
			</div>
			<div class="element-item alkali metal " data-category="alkali">
				<h3 class="name">Potassium</h3>
				<p class="symbol">K</p>
				<p class="number">19</p>
				<p class="weight">39.0983</p>
			</div>
			<div class="element-item alkali metal " data-category="alkali">
				<h3 class="name">Sodium</h3>
				<p class="symbol">Na</p>
				<p class="number">11</p>
				<p class="weight">22.99</p>
			</div>
			<div class="element-item transition metal " data-category="transition">
				<h3 class="name">Cadmium</h3>
				<p class="symbol">Cd</p>
				<p class="number">48</p>
				<p class="weight">112.411</p>
			</div>
			<div class="element-item alkaline-earth metal " data-category="alkaline-earth">
				<h3 class="name">Calcium</h3>
				<p class="symbol">Ca</p>
				<p class="number">20</p>
				<p class="weight">40.078</p>
			</div>
			<div class="element-item transition metal " data-category="transition">
				<h3 class="name">Rhenium</h3>
				<p class="symbol">Re</p>
				<p class="number">75</p>
				<p class="weight">186.207</p>
			</div>
			<div class="element-item post-transition metal " data-category="post-transition">
				<h3 class="name">Thallium</h3>
				<p class="symbol">Tl</p>
				<p class="number">81</p>
				<p class="weight">204.383</p>
			</div>
			<div class="element-item metalloid " data-category="metalloid">
				<h3 class="name">Antimony</h3>
				<p class="symbol">Sb</p>
				<p class="number">51</p>
				<p class="weight">121.76</p>
			</div>
			<div class="element-item transition metal " data-category="transition">
				<h3 class="name">Cobalt</h3>
				<p class="symbol">Co</p>
				<p class="number">27</p>
				<p class="weight">58.933</p>
			</div>
			<div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
				<h3 class="name">Ytterbium</h3>
				<p class="symbol">Yb</p>
				<p class="number">70</p>
				<p class="weight">173.054</p>
			</div>
			<div class="element-item noble-gas nonmetal " data-category="noble-gas">
				<h3 class="name">Argon</h3>
				<p class="symbol">Ar</p>
				<p class="number">18</p>
				<p class="weight">39.948</p>
			</div>
			<div class="element-item diatomic nonmetal " data-category="diatomic">
				<h3 class="name">Nitrogen</h3>
				<p class="symbol">N</p>
				<p class="number">7</p>
				<p class="weight">14.007</p>
			</div>
			<div class="element-item actinoid metal inner-transition " data-category="actinoid">
				<h3 class="name">Uranium</h3>
				<p class="symbol">U</p>
				<p class="number">92</p>
				<p class="weight">238.029</p>
			</div>
			<div class="element-item actinoid metal inner-transition " data-category="actinoid">
				<h3 class="name">Plutonium</h3>
				<p class="symbol">Pu</p>
				<p class="number">94</p>
				<p class="weight">(244)</p>
			</div>
		</div>
		</div>
	</body>
</html>