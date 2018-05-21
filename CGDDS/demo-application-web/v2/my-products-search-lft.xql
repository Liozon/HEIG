xquery version "1.0" encoding "utf-8";

declare namespace request="http://exist-db.org/xquery/request";
declare option exist:serialize "method=html5 media-type=text/html omit-xml-declaration=yes encoding=utf-8 indent=yes";

import module namespace util="http://exist-db.org/xquery/util";

declare function local:showResults($collection, $category, $brand)
{
    let $whereClauseTmp := 
    concat(
        if ($category != "")
        then concat("$product/data/category=""", $category, """ and ") 
        else "",
        if ($brand != "")
        then concat("$product/data/brand=""", $brand, """ and ")
        else ""
    )
    
    let $whereClause :=
        if ($whereClauseTmp != "")
        then substring($whereClauseTmp, 1, string-length($whereClauseTmp) - 5) 
        else "$product"
    
    return
        <div id="resultats">
            <h1 class="query hidden">
                {
                    $whereClause
                }
            </h1>
            <h2>Résultats de la recherche</h2>
            
            <div class="grid">
            
        {
            for $product at $i in $collection//product
            where util:eval($whereClause)
            order by $product/data/category, $product/data/brand, $product/data/name
            return
            <a data-fancybox="" data-type="iframe" data-src="show-product.xql?product={ util:collection-name($product) }/{ util:document-name($product) }" href="javascript:;">
            <div class="element-item" data-category="post-transition">
            <h3 class="name">{ data($product/data/name) }</h3>
            <img src="http://localhost:8080/exist/rest{replace(util:collection-name($product), 'xmlDocuments', 'illustrations')}/{ data($product/data/imageId) }.jpg" onerror='this.onerror=null; this.src="http://localhost:8080/exist/rest{replace(util:collection-name($product), 'xmlDocuments', 'illustrations')}/{data($product/data/imageId)}.jpeg"' alt="{data($product/data/name)}" width = "120" height="120" />
                   <p class="category">{ data($product/data/category) }</p>
                   <p class="brand">{ data($product/data/brand) }</p>
                   <p class="currency">{ data($product/data/variation/price/@currency) }</p>
                   <p class="price">{ data($product/data/variation/price) }</p>
                   </div>
                   </a>
        }
            </div>
        </div>
};

let $p_category :=  request:get-parameter("category", "")
let $p_brand := request:get-parameter("brand", "")
let $p_submit := request:get-parameter("submit", "")

let $collection := collection("/db/cgdds/cc2175/baechli-products")

return
    <html lang="fr">
        <head>
		<meta charset="utf-8" />
		<title>Recherche d'articles - Bächli</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="./js/isotope.pkgd.min.js"></script>
		<script src="./js/script.js"></script>
		<script src="./js/script2.js"></script>
		<script src="./js/jquery.fancybox.min.js"></script>
		<link rel="stylesheet" media="screen" type="text/css" href="./css/styles.css" />
		<link rel="stylesheet" type="text/css" href="./css/jquery.fancybox.min.css"/>
		<link rel="icon" type="image/png" href="./img/favicon.png" />
		<!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->
	</head>
        <body>
            <div class="header">
	        <img src="img/logo.png" alt="Logo Bächli" />
		    </div>
            <h2 class="title1">Recherche d'articles</h2>
            <form id="champs-recherche" action="" method="get">
            <div id="category">
                <label for="categoryList">Catégorie:</label>
                <select class="custom-select" id="categoryList" name="category">
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
                <select id="brandList" name="brand">
                  <option value="">Choisir une marque...</option>
            {
                for $brand in distinct-values($collection//brand)
                order by lower-case($brand)
                return 
                if (data($brand)=$p_brand)
                then 
                  <option selected="selected">{data($brand)}</option>
                else 
                  <option value="{lower-case(data($brand))}">{data($brand)}</option>
            }
                                        
                </select>
              </p>
            </div>
            <div>
              <input class="button" id="submitButton" name="submit" type="submit" value="Rechercher"/>
            </div>
            </form>
            <div class="result">
            <h2 class="sortby">Trier par</h2>

			<div id="sorts" class="button-group">
			  <button class="button" data-sort-by="name">Nom</button>
			  <button class="button" data-sort-by="category">Catégorie</button>
			  <button class="button" data-sort-by="brand">Marque</button>
			  <button class="button" data-sort-by="price">Prix croissant</button>
			</div>
			
			
			
			
			{
			  local:showResults($collection, $p_category, $p_brand)
			}
			
			</div>
			
        </body>
    </html>