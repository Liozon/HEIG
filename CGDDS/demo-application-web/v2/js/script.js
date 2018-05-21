// external js: isotope.pkgd.min.js

$('document').ready(function () {
    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        getSortData: {
            name: '.name',
            category: '.category',
            brand: '.brand',
            price: '.price parseInt',
        }
    });

    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };

    // bind filter button click
    $('#filters').on('click', 'button', function () {
        console.log("yo");
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });

    // bind sort button click
    $('#sorts').on('click', 'button', function () {
        var sortByValue = $(this).attr('data-sort-by');
        $grid.isotope({
            sortBy: sortByValue
        });
    });

    // change is-checked class on buttons
    $('.button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

})

/*-------------------Julien's scripts-------------------*/
$(function () {
    //searchButton();
    //$("#submitButton").click(updateSubmitValue);
    capitalizeFirstLetter();
    changeEmptyElement();
    showResults();
    overlay();
    textUpperCase();
    console.log("Custom's scripts loaded")
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

function overlay() {
    $("[data-fancybox]").fancybox({
        iframe: {
            preload: false
        }
    });
}

function textUpperCase() {
    $(".dd").on('click', function (evt) {
        var re = /(^|[.!?]\s+)([a-z])/g;
        var val = $(evt.target).val().replace(re, function (m, $1, $2) {
            return $1 + $2.toUpperCase()
        });
        $(evt.target).val(val);
    });
}