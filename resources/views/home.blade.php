@extends('layouts.app')

@section('content')


    <section >
        <div class="background">
        <div class="banner-main">
            <img src="images/banner.jpg" alt="#"/>
    

<form action="{{ route('navigation.navigate') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter the desired location">
    <button type="submit">Show Map</button>
</form>

<div id="map"></div>
            
            <div class="container">
               <div class="text-bg">
                  <h1><strong class="white">Find your flight</strong></h1>
                    <form action="/search/flights" method="post">
                        @csrf
                        <h4><strong class="white">From: </strong><input type="text" name="from" required>
                        <strong class="white">To: </strong><input type="text" name="to" required>
                        <div class="button_section"> <button class="main_bt" type="submit" href="#">Search</button>  </div>
                        <!-- <button type="submit">search</button> -->
                    </h4>
                    </form>
                    <a href="{{ route('map') }}">Google Maps</a>

                
                </div>
            </div>
        </div>
    </div>       

    <script>
        function initMap() {
            // Initialize the map
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 }, // Set the initial map center
                zoom: 10 // Set the initial zoom level
            });

            // Handle form submission
            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Get the name input value
                var name = document.querySelector('input[name="name"]').value;

                // Perform geocoding to get the latitude and longitude
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({ address: name }, function(results, status) {
                    if (status === 'OK' && results.length > 0) {
                        var location = results[0].geometry.location;
                        var latitude = location.lat();
                        var longitude = location.lng();

                        // Update the map center and marker
                        map.setCenter(location);
                        var marker = new google.maps.Marker({
                            position: location,
                            map: map,
                            title: 'Desired Location'
                        });
                    } else {
                        // Handle geocoding error
                        console.error('Geocoding failed: ' + status);
                    }
                });
            });
        }

        // Call the initMap function when the page finishes loading
        window.addEventListener('load', initMap);
    </script>

</section>

@endsection
