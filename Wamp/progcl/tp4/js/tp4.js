var GEO_NAMES = "http://api.geonames.org/postalCodeLookupJSON";
// GEONAMES DE SECOURS: http://chabloz.eu/cp/postalCodeLookupJSON.php
// Web Service de secours valide uniquement avec les codes postaux suivants:
// 1000, 12000, 1401, 1700, 2000
/*
var GOOGLE_MAP = "http://maps.google.com/staticmap";
var GOOGLE_MAP_PARA = "zoom=14&size=500x400&maptype=satellite&sensor=false&key=ABQIAAAA1nu4VMtb7TfHd-Dxiy9HmxRi_j0U6kJrkFvY4-OX2XYmEAa76BS_R3kzv5sXG5MMtQXVf5ySWN6_FQ&center=";*/

$(function () {
    // S'éxecute dès que la touche est relâchée
    $("#code").on("keyup", getData);
})

// Fonction qui va chercher et affiche le code postal
function getData() {
    var codepostal = $("#code").val();
    if (codepostal.length != 4)
        return;
    //console.log(postcode);

}

$(function () {
    $.getJSON(GEO_NAMES, {
        postalcode: codepostal, username: "comem"}, function (data) {

        //console.log("OK");

        //console.log(testdata[0].placeName);

    })
})