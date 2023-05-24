@extends('layouts.app')

@section('content')

 <!-- our blog -->

          	
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
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    <div class="carousel-item">
      <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
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
      <div class="place-name">1.Pokhara</div>
      <div class="place-discription">Pokhara, the 'Tourist Capital of Nepal,' is the second-largest city in this Himalayan country, after Kathmandu. At an altitude of more than 900m, it is one of the highest cities, 
         making it the base for many world-famous treks. The highlight of the town is its Lakeside, which is a boating paradise fl...</div>
         <p class="mb-3"><b>Best Time: </b> September to November </p> 
      <div class="show-more">Show More</div>
</div>
 </div>

 <div class="places">
    <div class="description">
       <div class="place-name">2.Kathmandu</div>
       <div class="place-discription"> Sprawled over its namesake valley surrounded by Himalayan mountains, Kathmandu is Nepal’s capital and 
         most-visited destination, full of ancient temples, golden pagodas, natural beauty and fascinating villages. At an elevation of 4,344 feet, Kathmandu marks the confluence of the Bagmati and Vishnumat... </div>
       <p class="mb-3"><b>Best Time: </b> September to November </p> 
       <div class="show-more">Show More</div>
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
      <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
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
      <div class="place-discription">Nestled in the Himalayas in Nepal,&nbsp; the beautiful town of Lumbini is the birthplace of Lord Buddha. Lumbini is a&nbsp;UNESCO World Heritage Site with many ancient stupas dating back to 2000 years
          and monasteries built by past dynasties. People come here from all over the world to this abode of ...</div>
          <p class="mb-3"><b>Best Time: </b> April to May </p>
      <div class="show-more">Show More</div>
</div>
 </div>
 <div class="places">
    <div class="description">
       <div class="place-name">4. Janakpur</div>
       <div class="place-discription">Janakpur is a city in Nepal which is believed to be the birthplace of Goddess Sita and the place of her marriage with Lord Ram. Also known as the City of Ponds, Janakpur boasts of more
          than seventy ponds that dot its verdant landscape.&nbsp;Here you can learn more about the ancient and revered Hindu...</div>
          <p class="mb-3"><b>Best Time: </b> September to March </p> 
       <div class="show-more">Show More</div>
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
      <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
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
      <div class="place-discription">Bhaktapur is one of three medieval cities in the Kathmandu Valley, the other two being Kathmandu and Patan. It is often referred to as Bhadgaon and Khwopa and has a mix of Hindu 
         and Buddhist population. This city is located around 12 kilometres from the capital city of Kathmandu and is divided into ...</div>
      <div class="show-more">Show More</div>
</div>
 </div>
 <div class="places">
    <div class="description">
       <div class="place-name">6.Patan</div>
       <div class="place-discription">Patan is the third-largest city in Nepal right after Kathmandu and Pokhara. It is&nbsp;presently known as Lalitpur. Both names are derived from the Sanskrit word ‘Lalitapattan’.
          The city is located just across the river Bagmati from Kathmandu. Patan has a Durbar Square that is full of statues, temples...</div>
       <div class="show-more">Show More</div>
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
      <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
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
      <div class="place-discription">Chitlang is an ancient Newar dominant village in Nepal. Surrounded by the Chandragiri hills, it is acclaimed as one&nbsp;of the most popular stops in the old trading routes from 
         Tibet to India and thus holds a rich historical significance. Chitlang serves to be the most preferred destination from Ka...</div>
      <div class="show-more">Show More</div>
</div>
 </div>
 <div class="places">
    <div class="description">
       <div class="place-name">8. Mustang</div>
       <div class="place-discription"> Mustang is known for its trekking tours and mountain sightseeing. Elevated at an altitude of 3840 kilometres, this city is divided into two parts: Lower and Upper Mustang. 
         Even though it is relatively unexplored, this city is a great destination for those who want to immerse in Tibetan culture as we...</div>
          <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
       <div class="show-more">Show More</div>
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
      <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
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
      <div class="place-discription">Chitlang is an ancient Newar dominant village in Nepal. Surrounded by the Chandragiri hills, it is acclaimed as one&nbsp;of the most popular stops in the old trading routes from 
         Tibet to India and thus holds a rich historical significance. Chitlang serves to be the most preferred destination from Ka...</div>
      <div class="show-more">Show More</div>
</div>
 </div>
 <div class="places">
    <div class="description">
       <div class="place-name">8. Mustang</div>
       <div class="place-discription"> Mustang is known for its trekking tours and mountain sightseeing. Elevated at an altitude of 3840 kilometres, this city is divided into two parts: Lower and Upper Mustang. 
         Even though it is relatively unexplored, this city is a great destination for those who want to immerse in Tibetan culture as we...</div>
          <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
       <div class="show-more">Show More</div>
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
      <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
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


 

@endsection