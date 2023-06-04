@extends('layouts.app')

@section('content')

<script>
function showMore(destinationIndex) {
  var destinations = [
    {
      name: "Pokhara",
      description: "Pokhara, the 'Tourist Capital of Nepal,' is the second-largest city in this Himalayan country, after Kathmandu. At an altitude of more than 900m, it is one of the highest cities, making it the base for many world-famous treks. The highlight of the town is its Lakeside, which is a boating paradise fl...",
      bestTime: "September to November"
      
    },
    {
      name: "Kathmandu",
      description: "Sprawled over its namesake valley surrounded by Himalayan mountains, Kathmandu is Nepal’s capital and most-visited destination, full of ancient temples, golden pagodas, natural beauty and fascinating villages. At an elevation of 4,344 feet, Kathmandu marks the confluence of the Bagmati and Vishnumat...",
      bestTime: "September to December"
    }
    // Add more destinations as needed
  ];

  // Get the destination based on the index
  var destination = destinations[destinationIndex];

  // Update the container with the destination information
  var container = document.getElementById("destination-container");
  container.innerHTML = `
    <h3>${destination.name}</h3>
    <p>${destination.description}</p>
    <p>Best Time: ${destination.bestTime}</p>

  `;
}
</script>
<a href="{{ route('map') }}">Google Maps</a>



@endsection