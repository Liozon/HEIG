var map;
            $(document).ready(function () {
                map = new ol.Map({
                    target: 'map'
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
                map.addLayer(wmsLayer);

                // Configuration of the map view
                var v0 = new ol.View({projection: "EPSG:4326"});
                var extent_init = [-18, 37, 38, 57]; // or v0.getProjection().getExtent();
                v0.fit(extent_init, map.getSize());
                map.setView(v0);  
                             
                //showExtent(extent_init);
            });