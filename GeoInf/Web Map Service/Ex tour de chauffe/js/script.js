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
    var wmsLayer = new ol.layer.Image({
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
   // map.addLayer(wmsLayer);

    var myLayer = new ol.layer.Image({
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

    map.addLayer(myLayer);

    var canton = new ol.layer.Image({
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

    map.addLayer(canton);

    var myLayer2 = new ol.layer.Image({
        source: new ol.source.ImageWMS({
            url: chWMS,
            ratio: 1,
            params: {
                VERSION: "1.0.0",
                LAYERS: "ch.bazl.sicherheitszonenplan",
                FORMAT: "image/png"
            }
        })
    });

    map.addLayer(myLayer2);

    // Configuration of the map view
    var v2 = new ol.View({ projection: "EPSG:4326" });
    var cbox = [8, 47]; // NB: c'est le centre de l'extent_init ci-dessus
    v2.setCenter(cbox);
    v2.setZoom(9);
    map.setView(v2);

    //showExtent(extent_init);
});