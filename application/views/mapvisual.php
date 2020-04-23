
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Affected areas</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    // This example creates circles on the map, representing populations in North
    // America.

    // First, create an object containing LatLng and population for each city.

    var citymap = {
        loc1: {
            center: {lat: 0.652084, lng: 34.873999},
            population: 100
        },
        loc2: {
            center: {lat: 0.447302, lng:  34.854362},
            population: 100
        },
        loc3: {
            center: {lat: 0.217452, lng: 34.493337},
            population: 100
        },
        loc4: {
            center: {lat: 0.227903, lng:  34.815159},
            population: 100
        },
    };

    function initMap() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: {lat: 0.281903, lng: 34.728617},
            mapTypeId: 'terrain'
        });

        // Construct the circle for each value in citymap.
        // Note: We scale the area of the circle based on the population.
        for (var city in citymap) {
            // Add the circle for this city to the map.
            var cityCircle = new google.maps.Circle({
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
                map: map,
                center: citymap[city].center,
                radius: Math.sqrt(citymap[city].population) * 100
            });
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuHya210gjhNN8cE-K2e5UGh7oWV_5ePo&callback=initMap">
</script>
</body>
</html>