$(function () {
    searchButton();
    //$("#submitButton").click(updateSubmitValue);
    capitalizeFirstLetter();
    changeEmptyElement();
    showResults();
});

function searchButton() {
    //console.log("searchButton loaded");
    $("#submitButton").val("Afficher tous les produits");
    $(".dropdown").change(function () {
        $("#submitButton").val("Rechercher");
    });
}

function updateSubmitValue() {
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

function showResults() {
    if (window.location.href.indexOf("category") > -1) {
        //console.log("with category");
        $(".result").removeClass("hidden");
        $(".is-checked").click();
    }
}