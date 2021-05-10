<?php
include 'assets/includes/header.php';
?>
<div id="mapid" style="width: 600px; height: 400px"></div>
<script>

        //Your unique Track My Ride API and user keys.
        //These are required to access your data feed.
        var api_key  = 'fdsj329fjwd92kko439FDA12jFa12jk9402Ab';
        var user_key = 'ab46cf36de56ba93';
        
        //Disable jquery from caching out API requests.
        $.ajaxSetup({ cache: false });
        
        ///////////////////////////////////////////////////////
        // Do not change below this line
        ///////////////////////////////////////////////////////
        
        //Function to reload the current position of the bus.
        function getDeviceLocations( mymap, settings ) {
            
            var arrayOfLatLngs = [];
            
            
            //Load our icons
            $.ajax({
                type: "GET",
                url: "https://www.trackmyride.com.au/app/php/api.php?api_key="+api_key+"&user_key="+user_key+"&limit=1",
                dataType: "xml",
                cache: false,
                success: function (xml) {
                
                    //remove the icons from prior runs of vehicles.
                    if(settings.vehicles.length > 0) {
                        for( c = 0; c < settings.vehicles.length; c++) {
                            settings.vehicles[c].icon.removeFrom(mymap);
                            delete settings.vehicles[c];
                        }
                        
                        settings.vehicles = Array();
                    }
                             
                    //Load in the new vehicle postion from the api data returned.
                    $(xml).find('data').children().each(function () {
                    
                        var xmlData = $(this);
                        //For each vehicle in the XML feed.
                        var vehicle = { unique_id :   xmlData.find("unique_id").text(),
                                        name :        xmlData.find("name").text(),
                                        line_color :  xmlData.find("line_color").text(),
                                        arrow_color : xmlData.find("arrow_color").text(),
                                        updated_at :  xmlData.find("updated_at").text(),
                                        aaData :      xmlData.find("aaData").children(),
                                        icon : null};
                                        
                        //If no data is available for the vehicle, skip it.               
                        if(xmlData.find("aaData").children().length == 0 ) {
                            return;
                        }
                        
                        var firstDataNode = vehicle.aaData.first();
                        var currentPosition = [firstDataNode.find("lat").text(), firstDataNode.find("lng").text()];
                        arrayOfLatLngs.push(currentPosition)
                        
                        //Bind a clickable popup to the vehicle's icon.
                        vehicle.icon = L.marker(currentPosition, {icon: busIcon}).bindPopup("<b>Hello!</b><br />This is where the hospital bus<br/>currently is at "+firstDataNode.find("time").text());
                        vehicle.icon.addTo(mymap);
                        
                        //Add the vehicle to our array of vehicles, so we can remove the icon next round.
                        settings.vehicles.push(vehicle);
                    });
                    
                    //Fit the map to the markers.
                    var bounds = new L.LatLngBounds(arrayOfLatLngs);
                    mymap.fitBounds(bounds, {maxZoom : 17});
                }
                
            });
        }
        
        //Internal settings.
        var settings = { runs : 0,
                         vehicles : [] };
                         
        
        //Create the map and bind it to the div with ID 'mapid'
        var mymap = new L.Map('mapid', {
                                        trackResize: true,
                                        center: [-35.34807, 149.10084],  //The home position of the map. This is the ACT Health hospital. geographical point (longitude and latitude)
                                        zoom: 10
                            });
        
        //Map tiles can be loaded from Track My Ride's map tile engine.
        var mapStyle       = 'https://www.trackmyride.com.au/app/tiles.php?z={z}&x={x}&y={y}&r=nokia_plain',
            satelliteStyle = 'https://www.trackmyride.com.au/app/tiles.php?z={z}&x={x}&y={y}&r=nokia&v=1';
            
        //Add the tile layer to the map.
        //Change the variable mapStyle to satelliteStyle to change the tile background used..
        L.tileLayer(mapStyle, {
                                attribution: "Map data © here.com, GPS by <a href='http://www.trackmyride.com.au'>TrackMyRide.com.au</a>"
                              }).addTo(mymap);
        
        //Add the map scale to the map
        L.control.scale().addTo(mymap);
        
        //The bus icon and icon config
        var busIcon = L.icon({
            iconUrl: 'bus.png',

            iconSize:     [64, 64], // size of the icon
            iconAnchor:   [32, 32], // point of the icon which will correspond to marker's location
            popupAnchor:  [0, -32]  // point from which the popup should open relative to the iconAnchor
        });


        //Load the current bus position from our API.
        getDeviceLocations(mymap, settings);
        
        //Set an interval based timer to refresh the position every 10 seconds, in milliseconds.
        setInterval(function () {
            getDeviceLocations(mymap, settings)
        }, 10000, settings, mymap); 
        
        

	</script>

<?php
include 'assets/includes/footer.php';
?>