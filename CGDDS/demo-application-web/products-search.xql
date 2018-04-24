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

let $collection := collection("/db/cgdds/cc2145/baechli-products")

return
    <html lang="fr">
        <head>
            <meta charset="utf-8"/>
            <title>Moteur de recherche pour les produits du catalogue Bächli...</title>
            <link rel="stylesheet" media="screen" type="text/css" href="styles.css" />
        </head>
        <body>
            <div id="main">
                <h1>Moteur de recherche pour les produits du catalogue Bächli...</h1>
                <div id="recherche">
                    <h2>Critères de recherche</h2>
                    <form id="productsForm" action="" method="get">
                        <div id="category">
                            <p>
                                <label for="categoryList">Catégorie:</label> 
                                <select id="categoryList" name="category">
                                    <option value="">Choisir une catégorie...</option>
    {
        for $category in distinct-values($collection//category)
        order by lower-case($category)
        return 
        if (data($category)=$p_category)
        then <option selected="selected">{data($category)}</option>
        else <option>{data($category)}</option>
    }
                                </select>
                            </p>
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
        then <option selected="selected">{data($brand)}</option>
        else <option>{data($brand)}</option>
    }
                                </select>
                            </p>
                        </div>
                        <div id="price">
                            <p>
                                <label for="priceMin">Prix min:</label>
                                <input id="priceMin" type="text" name="priceMin" value="{$p_priceMin}" />
                                <label for="priceMax">Prix max:</label>
                                <input id="priceMax" type="text" name="priceMax" value="{$p_priceMax}" />
                            </p>
                        </div>
                        <div>
                            <input id="submitButton" name="submit" type="submit" value="Envoyer" />
                        </div>
                    </form>
                </div>
            {
                if ($p_submit != "")
                then local:showResults($collection, $p_category, $p_brand, $p_priceMin, $p_priceMax)
                else ""
            }
            </div> 
        </body>
    </html>