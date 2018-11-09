// Aide pour les URL des Web Services
var WS = "https://chabloz.eu/movies/?query=";
var WS_THUMB = "https://chabloz.eu/movies/thumb/?id=";
var WS_RATING = "https://chabloz.eu/movies/rating/get/?id=";
var WS_RATEIT = "https://chabloz.eu/movies/rating/post/";

// Aide: pour arrondir un nombre à l'entier le plus proche: Math.round(nb_ici);

$(function () {
    //console.log("booted"); OK
    ligne = $(".templateMovie").clone();
    //console.log(ligne); OK

    $("#btnSearch").on("click", function () {
        var ville = $("#search").val();
        getData(ville);
        $(".templateMovie").remove();
        //console.log(ville); OK
    })
})


function getData(ville) {
    //console.log(ville);        
    $.getJSON(WS, {
        "query": ville
    }, function (response) {
        //console.log(response); OK


        $(response).each(function (index, element) {
            //console.log(element); OK
            var description = element.description;
            var id = element.id;
            var title = element.title;

            //console.log(description); OK
            //console.log(id); OK
            //console.log(title); OK

            var clone = ligne.clone();
            $(".title", clone).text(title);
            $(".description", clone).text(description);
            //            $("#id", clone);
            getNotation(id, clone);

            //Partie images
            //            $.getJSON(WS_THUMB + id, function (image) {
            //                //$(".thumb", clone).remove('src="image"');
            //                $(".thumg", clone).add('src="' + image);
            //            })
            clone.appendTo("#results");

        })

    })
}

function getNotation(id, clone) {
    //console.log(id); OK
    $.get(WS_RATING, {
        "id": id
    }, function (notation) {
        //console.log(notation); OK
        var rating = $("rating rating", notation).text();
        var votes = $("rating votes", notation).text();
        //console.log(rating); OK
        //console.log(votes); OK
        $(".rating", clone).text(rating);
        $(".votes", clone).text(votes);
        var ratingRounded = Math.round(rating);
        ratingAddClass(ratingRounded);

    })

}

function ratingAddClass(ratingRounded) {
    //console.log(ratingRounded); OK
    $("span").addClass(function (index, ratingRounded) {
        var addedClass;
        if (ratingRounded = 0) {
            addedClass = "rating0";
            return addedClass;
        } else if (ratingRounded = 1) {
            addedClass = "rating1";
            return addedClass;
        } else if (ratingRounded = 2) {
            addedClass = "rating2";
            return addedClass;
        } else if (ratingRounded = 3) {
            addedClass = "rating3";
            return addedClass;
        } else if (ratingRounded = 4) {
            addedClass = "rating4";
            return addedClass;
        } else {
            addedClass = "rating5";
            return addedClass;

        }
    })
}