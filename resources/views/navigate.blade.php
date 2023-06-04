@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <html>
    <head>
        <title>Google Maps</title>
        <style>
             #map {
                width: 100%;
                height: 400px;
            }
        </style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap" async defer></script>
    </head>
    <body>
        <div id="map"></div>

        <script>
            function initMap() {
                console.log("Initializing the map");
// Your map initialization code here
var mapOptions = {
  center: { lat: latitude, lng: longitude },
  zoom: 10 // Adjust the zoom level as needed
};

var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            // Access the PHP variables within your JavaScript code
            var latitude = <?php echo $latitude; ?>;
            var longitude = <?php echo $longitude; ?>;

            // Use the latitude and longitude values in your JavaScript code
            // ...

            // Load the Google Maps API with the callback to initialize the map
            function loadGoogleMapsAPI() {
                var script = document.createElement('script');
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap';
                script.defer = true;
                script.async = true;
                document.head.appendChild(script);
            }

            // Call the function to load the Google Maps API
            loadGoogleMapsAPI();
        </script>



    </body>
    </html>

@endsection
