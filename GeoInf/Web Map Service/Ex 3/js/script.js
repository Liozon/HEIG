var map;
$(document).ready(function () {
    map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ]
    });
    // Carte de base (masquée)
    var carteDeBase = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: blWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "ne_10m_admin_0_countries",
                FORMAT: "image/png"
            }
        })
    });
    // map.addLayer(carteDeBase);

    var antenne4g = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: chWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "ch.bakom.mobilnetz-4g",
                FORMAT: "image/png"
            }
        })
    });

    //map.addLayer(antenne4g);

    var canton = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: chWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "ch.swisstopo.swissboundaries3d-kanton-flaeche.fill",
                FORMAT: "image/png"
            }
        })
    });

    //map.addLayer(canton);

    var commune = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: chWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "ch.swisstopo.swissboundaries3d-gemeinde-flaeche.fill",
                FORMAT: "image/png"
            }
        })
    });

    map.addLayer(commune);
var test3 = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: myWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "geoinf:worldadm",
                FORMAT: "image/png"
            }
        })
    });

    map.addLayer(test3);
    var test = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: myWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "geoinf:pk25",
                FORMAT: "image/png"
            }
        })
    });

    map.addLayer(test);

    var test2 = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: myWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "geoinf:cities",
                FORMAT: "image/png"
            }
        })
    });

    map.addLayer(test2);

    

    // Configuration of the map view
    var v2 = new ol.View({ projection: "EPSG:4326" });
    var cbox = [8.2, 46.8]; // NB: c'est le centre de l'extent_init ci-dessus
    v2.setCenter(cbox);
    v2.setZoom(9);
    map.setView(v2);

    //showExtent(extent_init);
});