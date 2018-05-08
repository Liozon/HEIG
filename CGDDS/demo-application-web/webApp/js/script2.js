$(function () {
    capitalizeFirstLetter();
    changeEmptyElement();
});

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
    console.log("capitalizeFirstLetter done");
}

function changeEmptyElement() {
    $("option").eq(1).text("(Sans catégorie)");
    console.log("changeEmptyElement done");
}