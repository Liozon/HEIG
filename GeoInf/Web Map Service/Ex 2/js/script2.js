var map;
            $(document).ready(function(){            
                map = new ol.Map({
                    target: 'map',
                    layers: [
                        new ol.layer.Tile({
                            source: new ol.source.OSM()
                        })
                    ]
                });
                map.getView().setCenter(ol.proj.transform([6.15,46.2],"EPSG:4326","EPSG:3857"));
                map.getView().setZoom(10);
            });