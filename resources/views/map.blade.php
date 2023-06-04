@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
    var locations = @json($locations);

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8
        });

        var bounds = new google.maps.LatLngBounds();

        for (var i = 0; i < locations.length; i++) {
            var location = locations[i];
            var latLng = new google.maps.LatLng(location.lat, location.lng);

            bounds.extend(latLng);

            addMarker(location, map);
        }

        map.fitBounds(bounds);
    }

    function addMarker(location, map) {
        var marker = new google.maps.Marker({
            position: { lat: location.lat, lng: location.lng },
            map: map,
            title: location.name
        });

        var infowindow = new google.maps.InfoWindow({
            content: '<h3>' + location.name + '</h3><p>' + location.description + '</p>'
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }

    // Load the map after the Google Maps API is loaded
    function loadMap() {
        var script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap';
        script.onload = function() {
            initMap();
        };
        document.body.appendChild(script);
    }

    // Call the loadMap function when the page has finished loading
    window.addEventListener('load', loadMap);
</script>


    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap" async defer></script> -->


    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap"></script> -->
</body>
</html>

@endsection

