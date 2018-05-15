$(function () {
    searchButton();
    $("#submitButton").click(updateSubmitValue);
    //capitalizeFirstLetter();
    //changeEmptyElement();
    //updateDropdown();
});

function searchButton() {
    //console.log("searchButton loaded");
    $("#submitButton").val("Afficher tous les produits");
    $(".dropdown").change(function () {
        $("#submitButton").val("Rechercher");
    });
}

function updateSubmitValue() {
    console.log("FUCK");
    $("#submitButton").val("Rechercher");
    searchButton();
}

function capitalizeFirstLetter() {
    var capitalizeMe
    $("option").each(function capitalize() {
        capitalizeMe = $(this).text();
        //console.log(capitalizeMe);
        var element = capitalizeMe.toLowerCase();
        //console.log(temp);
        var temp = element.charAt(0).toUpperCase() + element.slice(1);
        //console.log(temp);
        $(this).text(temp);

    })
    //console.log("capitalizeFirstLetter done");
}

function changeEmptyElement() {
    $("option").eq(1).text("(Sans catégorie)");
    //console.log("changeEmptyElement done");
}

function updateDropdown() {
    //var value = $(".dropdown").val();
    $(".dropdown1").change(function () {
        $(".dropdown2").addClass("hidden");
        $(".dropdown3").removeClass("hidden");
    });
}