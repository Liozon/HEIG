var blWMS = "http://demo.boundlessgeo.com/geoserver/wms";
            var ctrx, ctry, x, y;
            var zoom = 2;
            var pan = 10;
            
            $(document).ready(function(){
                // situation initiale
                ctrx = 0;
                ctry = 0;
                x = 180;
                y = 90;
                
                doGetMapRequests();
                $("span").click(navmap);
            });
            
            function navmap(e) {
                switch ($(this).first().attr("id")) {
                    case "westBtn":
                        ctrx = ctrx - pan;
                        break;
                    case "northBtn":
                        ctry = ctry + pan;
                        break;
                    case "eastBtn":
                        ctrx = ctrx + pan;
                        break;
                    case "southBtn":
                        ctry = ctry - pan;
                        break;
                    case "zinBtn":
                        x = x / zoom;
                        y = y / zoom;
                        break;
                    case "zoutBtn":
                        x = x * zoom;
                        y = y * zoom;
                        break;
                }
                doGetMapRequests();                
            }
            
            function doGetMapRequests() {
                minx = ctrx - x;
                maxx = ctrx + x;
                miny = ctry - y;
                maxy = ctry + y;
                
                bbox = minx + "," + miny + "," + maxx + "," + maxy;
                console.log(bbox);

                request = blWMS + "?"
                            + "service=WMS"
                            + "&version=1.1.0"
                            + "&request=GetMap"
                            + "&layers=ne_10m_admin_0_countries"
                            + "&styles="
                            + "&bbox="+bbox
                            + "&width=800"
                            + "&height=400"
                            + "&srs=EPSG:4326"
                            + "&format=image/png";
                        
                $("#layer1").attr("src", request);
            }                  