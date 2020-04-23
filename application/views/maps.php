<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Affected Areas</li>
        </ol>
        <div class="row">
            <div id="map"></div>
            <script>

                // First, create an object containing LatLng and population for each city.
                var citymap = {
                    Lugari: {
                        center: {lat: 0.652084, lng: 34.873999},
                        population: 100
                    },
                    Malava: {
                        center: {lat: 0.447302, lng:  34.854362},
                        population: 100
                    },
                    Butere: {
                        center: {lat: 0.217452, lng: 34.493337},
                        population: 100
                    },
                    Shinyalu: {
                        center: {lat: 0.227903, lng:  34.815159},
                        population: 100
                    }
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
        </div>
    </div>
</div>
<!-- /.container-fluid-->