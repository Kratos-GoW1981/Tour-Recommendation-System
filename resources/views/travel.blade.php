@extends('layouts.app')

@section('content')

 <!-- our blog -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    },

    {
      name: "Lumbini",
      description: "Nestled in the Himalayas in Nepal,  the beautiful town of Lumbini is the birthplace of Lord Buddha. Lumbini is a UNESCO World Heritage Site with many ancient stupas dating back to 2000 years and monasteries built by past dynasties. People come here from all over the world to this abode of ...",
      bestTime: "April to May"
    },

    {
      name: "Janakpur",
      description: "Janakpur is a city in Nepal which is believed to be the birthplace of Goddess Sita and the place of her marriage with Lord Ram. Also known as the City of Ponds, Janakpur boasts of more than seventy ponds that dot its verdant landscape. Here you can learn more about the ancient and revered Hindu...",
      bestTime: "September to March"
    },

    {
      name: "Bhaktapur",
      description: "Bhaktapur is one of three medieval cities in the Kathmandu Valley, the other two being Kathmandu and Patan. It is often referred to as Bhadgaon and Khwopa and has a mix of Hindu and Buddhist population. This city is located around 12 kilometres from the capital city of Kathmandu and is divided into ...",
      // bestTime: "September to December"
    },

    {
      name: "Patan",
      description: "Patan is the third-largest city in Nepal right after Kathmandu and Pokhara. It is presently known as Lalitpur. Both names are derived from the Sanskrit word ‘Lalitapattan’. The city is located just across the river Bagmati from Kathmandu. Patan has a Durbar Square that is full of statues, temples...",
    },

    {
      name: "Chitlang",
      description: "Chitlang is an ancient Newar dominant village in Nepal. Surrounded by the Chandragiri hills, it is acclaimed as one of the most popular stops in the old trading routes from Tibet to India and thus holds a rich historical significance. Chitlang serves to be the most preferred destination from Ka...",
    },

    {
      name: "Mustang",
      description: "Mustang is known for its trekking tours and mountain sightseeing. Elevated at an altitude of 3840 kilometres, this city is divided into two parts: Lower and Upper Mustang. Even though it is relatively unexplored, this city is a great destination for those who want to immerse in Tibetan culture as we...",
    },

    {
      name: "Jomsom",
      description: "Jomsom is also known as Dzong-Sampa or New Fort. Jomsom lies along both the banks of Kali Gandaki river in the Mustang District of Nepal. Jomsom is the capital of Mustang district. Kali Gandaki happens to be the deepest gorge in the world. The altitude of Jomsom is 2700 m. Jomsom has developed as a ...",
      bestTime: "September to December"
    },

    {
      name: "Mount Manaslu",
      description: "The word Manaslu comes from the Sanskrit word manas, which means a person's soul, and Mount Manaslu can be reflected as exactly that - the mountain of the soul. Despite all the chaotic craze around mountain trekking that Nepal experiences every season, Manaslu has surprisingly held on to its pristin...",
    },

    {
      name: "Gorkha",
      description: "Some 25 km north of Abu Khaireni, the picturesque town called Gorkha is the ancient home of the lionhearted Gorkha people. Around 300 years ago, when Prithvi Narayan Shah unified all the rivalling fiefdoms of Nepal into one monarchy and divided up the country into 50 different states, Gorkha was bor...",
    },

    {
      name: "Nuwakot",
      description: "Stuck somewhere in between the 17th-century ambience and 21st-century facilities, Nuwakot is one of the most attractive destinations of Nepal. Albeit there are not many attractions to see, the Nuwakot Palace and its Durbar Square in itself are enough to draw the travellers who love to delve deep dow...",
    },

    {
      name: "Kagbeni",
      description: "Far away from the bustling town squares and temples and dance festivals of the towns and cities of Nepal, the village of Kagbeni awaits you with its audacious beauty. Officially Kagbeni is a settlement that bridges the gap between Lower and Upper Mustang, right at the feet of Muktinath Valley by the...",
    },

    {
      name: "Shivapuri Nagarjun National Park",
      description: "Towards the north of the Kathmandu valley, just from where the hustle and bustle of the urban world start to fade away, and the imaginary lines of the city get blurred into the outskirts, lies the Shivpuri National Park. The sprawling sub-tropical forest, spreading for around 160 square meters, the ...",
    },

    {
      name: "Bandipur",
      description: "Pretty as a picture - that is how one can perfectly describe Bandipur. This living and breathing abode of Newari culture is a hilltop settlement in the Gandaki Zone at 1030 metres, some 700 metres above the Marsyangdi River. The municipality snuggles itself on the saddle of the Mahabharat Range...",
    },

    {
      name: "Chitwan National Park",
      description: "Chitwan National Park is the first step that Nepal took towards protection of the wildlife and nature at large. Located in the subtropical inner Terai lowlands of south-central Nepal, the national park covers an area of 952.63 sq. km. over the districts of Nawalparasi, Parsa, Makwanpur and Chitwan i...",
    },
    
  ];

  // Get the destination based on the index
  var destination = destinations[destinationIndex];

  // Update the container with the destination information
  var container = document.getElementById("destination-container  ");
  container.innerHTML = `
    <h1 class="place-name">${destination.name}</h1>
    <h3 class="description">${destination.description}</h3>
    <p>Best Time: ${destination.bestTime}</p>
    
  `;
  // window.location.href = '/destination';

}
</script>

<script>

function initMap() {
            // Initialize the map with a default location
            var defaultLat = 28.2096;
            var defaultLng = 83.9856;
            showMap(defaultLat, defaultLng);
        }
        function showMap(lat, lng) {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: lat, lng: lng },
                zoom: 13x 
            });

            var marker = new google.maps.Marker({
                position: { lat: lat, lng: lng },
                map: map,
                title: 'Location'
            });
        }
        google.maps.event.addDomListener(window, 'load', initMap);

    </script>

<!-- Include the Google Maps API script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIYX11HqAb4vz75ldcp85xH9TWfwqnqgs&callback=initMap" async defer></script>
<div id="destination-container">


 
<h1 class="heading-title"> Places to Visit in Nepal </h1>
<h2 class="heading-desc"> Here are the top 20 tourist places and attractions in Nepal </h2>
<h3 class="heading-desc"> Read more to plan your travel to Nepal.</h3>
<div class="places">

 
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Pokhara,Nepal</p>
      </div>
      <div class="carousel-item">
        <img src="/images/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Panoramic World Peace Pagoda</p>
      </div>
      <div class="carousel-item">
        <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <p>Pokhara Valley-Second Largest Valley in Nepal</p>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="description">
<a href="/map" class="place-name" onclick="initMap(28.2096, 83.9856)">1. Pokhara</a>
  <div class="place-description">Pokhara, the 'Tourist Capital of Nepal,' is the second-largest city in this Himalayan country, after Kathmandu. At an altitude of more than 900m, it is one of the highest cities, 
    making it the base for many world-famous treks. The highlight of the town is its Lakeside, which is a boating paradise fl...</div>
    <p class="mb-3"><b>Best Time: </b> September to November </p> 
    <button onclick="showMore(0)">Show More</button> <!-- Pokhara -->
    <a href="{{ route('destination') }}">
      <!-- <button onclick="showMore(0)">Go to Destination Page</button> -->
    </a>
  </div>
</div>

<div id="map"></div>

<div class="places">
  <div class="description">
    <a href="/map" class="place-name" onclick="initMap(27.7172, 85.3240)">2.Kathmandu</a>
       <div class="place-description"> Sprawled over its namesake valley surrounded by Himalayan mountains, Kathmandu is Nepal’s capital and 
         most-visited destination, full of ancient temples, golden pagodas, natural beauty and fascinating villages. At an elevation of 4,344 feet, Kathmandu marks the confluence of the Bagmati and Vishnumat... </div>
         <p class="mb-3"><b>Best Time: </b> September to November </p> 
         <button onclick="showMore(1)">Show More</button> <!-- Kathmandu -->
         
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
  <div class="description">
    <div class="place-name"> 3. Lumbini </div>
    <div class="place-description">Nestled in the Himalayas in Nepal,&nbsp; the beautiful town of Lumbini is the birthplace of Lord Buddha. Lumbini is a&nbsp;UNESCO World Heritage Site with many ancient stupas dating back to 2000 years
      and monasteries built by past dynasties. People come here from all over the world to this abode of ...</div>
      <p class="mb-3"><b>Best Time: </b> April to May </p>
      <button onclick="showMore(2)">Show More</button> <!-- Kathmandu -->
      
    </div>
  </div>
  <div class="places">
    <div class="description">
      <div class="place-name">4. Janakpur</div>
      <div class="place-description">Janakpur is a city in Nepal which is believed to be the birthplace of Goddess Sita and the place of her marriage with Lord Ram. Also known as the City of Ponds, Janakpur boasts of more
        than seventy ponds that dot its verdant landscape.&nbsp;Here you can learn more about the ancient and revered Hindu...</div>
        <p class="mb-3"><b>Best Time: </b> September to March </p> 
        <button onclick="showMore(3)">Show More</button> <!-- Kathmandu -->
        
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>
</div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
  <div class="description">
    <div class="place-name">5.Bhaktapur </div>
    <div class="place-description">Bhaktapur is one of three medieval cities in the Kathmandu Valley, the other two being Kathmandu and Patan. It is often referred to as Bhadgaon and Khwopa and has a mix of Hindu 
       and Buddhist population. This city is located around 12 kilometres from the capital city of Kathmandu and is divided into ...</div>
       <button onclick="showMore(4)">Show More</button> <!-- Kathmandu -->
       
      </div>
    </div>
    <div class="places">
      <div class="description">
        <div class="place-name">6.Patan</div>
       <div class="place-description">Patan is the third-largest city in Nepal right after Kathmandu and Pokhara. It is&nbsp;presently known as Lalitpur. Both names are derived from the Sanskrit word ‘Lalitapattan’.
         The city is located just across the river Bagmati from Kathmandu. Patan has a Durbar Square that is full of statues, temples...</div>
         <button onclick="showMore(5)">Show More</button> <!-- Kathmandu -->
         
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>
</div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
   <div class="description">
      <div class="place-name">7.Chitlang</div>
      <div class="place-description">Chitlang is an ancient Newar dominant village in Nepal. Surrounded by the Chandragiri hills, it is acclaimed as one&nbsp;of the most popular stops in the old trading routes from 
        Tibet to India and thus holds a rich historical significance. Chitlang serves to be the most preferred destination from Ka...</div>
        <button onclick="showMore(6)">Show More</button> <!-- Kathmandu -->
        
      </div>
    </div>
    <div class="places">
      <div class="description">
        <div class="place-name">8. Mustang</div>
        <div class="place-description"> Mustang is known for its trekking tours and mountain sightseeing. Elevated at an altitude of 3840 kilometres, this city is divided into two parts: Lower and Upper Mustang. 
          Even though it is relatively unexplored, this city is a great destination for those who want to immerse in Tibetan culture as we...</div>
          <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
          <button onclick="showMore(7)">Show More</button> <!-- Kathmandu -->
          
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>
</div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
  <div class="description">
    <div class="place-name">9. Jomsom</div>
    <div class="place-description">Jomsom is also known as Dzong-Sampa or New Fort. Jomsom lies along both the banks of Kali Gandaki river in the Mustang District of Nepal. Jomsom is the capital of Mustang 
      district. Kali Gandaki happens to be the deepest gorge in the world. The altitude of Jomsom is 2700 m. Jomsom has developed as a ...</div>
      <button onclick="showMore(8)">Show More</button> <!-- Kathmandu -->
      
    </div>
  </div>
  <div class="places">
    <div class="description">
      <div class="place-name">10. Mount Manaslu</div>
      <div class="place-description"> The word Manaslu comes from the Sanskrit word manas, which means a person's soul, and Mount Manaslu can be reflected as exactly that - the mountain of the soul. 
        Despite all the chaotic craze around mountain trekking that Nepal experiences every season, Manaslu has surprisingly held on to its pristin...</div>
          <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
          <button onclick="showMore(9)">Show More</button> <!-- Mount Manaslu -->
          
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
            </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>
</div>



<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
  <div class="description">
    <div class="place-name">11. Gorkha</div>
    <div class="place-description">Some 25 km north of Abu Khaireni, the picturesque town called Gorkha is the ancient home of the lionhearted Gorkha people. Around 300 years ago, when Prithvi 
      Narayan Shah unified all the rivalling fiefdoms of Nepal into one monarchy and divided up the country into 50 different states, Gorkha was bor...</div>
      <button onclick="showMore(10)">Show More</button> <!-- Gorkha -->
      
    </div>
  </div>

  <div class="places">
    <div class="description">
      <div class="place-name">12. Nuwakot</div>
      <div class="place-description"> Stuck somewhere in between the 17th-century ambience and 21st-century facilities, Nuwakot is one of the most attractive destinations of Nepal. Albeit there are not many attractions 
        to see, the Nuwakot Palace and its Durbar Square in itself are enough to draw the travellers who love to delve deep dow...</div>
        <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
        <button onclick="showMore(11)">Show More</button> <!-- Nuwakot -->
        
      </div>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>
</div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/pokhara.jpg" alt=""></div>
  <div class="description">
    <div class="place-name">13. Kagbeni</div>
    <div class="place-description">Far away from the bustling town squares and temples and dance festivals of the towns and cities of Nepal, the village of Kagbeni awaits you with its audacious beauty. Officially 
        Kagbeni is a settlement that bridges the gap between Lower and Upper Mustang, right at the feet of Muktinath Valley by the...</div>
        <button onclick="showMore(12)">Show More</button> <!-- Kagbeni -->
      
      </div>
    </div>
    
    <div class="places">
    <div class="description">
      <div class="place-name">14. Shivapuri Nagarjun National Park</div>
       <div class="place-description"> Towards the north of the Kathmandu valley, just from where the hustle and bustle of the urban world start to fade away, and the imaginary lines of the city get blurred into the outskirts, 
         lies the Shivpuri National Park. The sprawling sub-tropical forest, spreading for around 160 square meters, the ...</div>
          <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
          <button onclick="showMore(13)">Show More</button> <!-- Shivapuri -->
          
        </div>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>   </div>

</div>

<div class="places">
  <div class="images"><img id="images-size" src="/images/bandipur.jpg" alt=""></div>
  <div class="description">
    <div class="place-name">15. Bandipur</div>
    <div class="place-description">Pretty as a picture - that is how one can perfectly describe Bandipur. This living and breathing abode of Newari culture is a hilltop settlement in the Gandaki 
      Zone at 1030 metres, some 700 metres above the Marsyangdi River. The municipality snuggles itself on the saddle of the Mahabharat Range...</div>
      <button onclick="showMore(14)">Show More</button> <!-- Bandipur -->
      
    </div>
  </div>
  
  <div class="places">
    <div class="description">
      <div class="place-name">16. Chitwan National Park</div>
      <div class="place-description"> Chitwan National Park is the first step that Nepal took towards protection of the wildlife and nature at large. Located in the subtropical inner 
        Terai lowlands of south-central Nepal, the national park covers an area of 952.63 sq. km. over the districts of Nawalparasi, Parsa, Makwanpur and Chitwan i...</div>
        <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
        <button onclick="showMore(15)">Show More</button> <!-- Chitwan -->
        
      </div>
      
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/np.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>

  </button>
</div>   </div>

</div>


<!-- our blog -->
<div id="blog" class="blog">
  <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                     <h2>Recommended Places</h2>
                     <span>The recommendation places for you is: </span> 
                    </div>
               </div>
              </div>
</div>
<div class="row">

  @foreach($places as $p)
  
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="blog-box">
      <figure><img src="{{$p->image}}" alt="#"/>
                     </figure>
                     <div class="travel">
                       <span>{{$p->name}} :  Nearest to {{$p->nearest_to}}</span> 
                     </div>
                     <h3>{{$p->address}}</h3>
                     <p>{{$p->description}}...<a href="{{$p->link}}">more</a></p>
                    </div>
                  </div>
            @endforeach
            </div>
         </div>
      </div>
      <!-- end our blog -->



 

@endsection