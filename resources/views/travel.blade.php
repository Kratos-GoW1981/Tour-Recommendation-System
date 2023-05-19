@extends('layouts.app')

@section('content')

 <!-- our blog -->
 <div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Places to Visit in Nepal</h2>
                     <h3>The top 20 tourist places and attractions in Nepal : </h3> 

                     <span> Here are the tourist places in Nepal to explore sightseeing destinations. Read more to plan your travel to Nepal:</span>
                  </div>
               </div>
            </div>
            
            <div class="col-12 col-md-6 pr-md-3">
	

<!-- <div class="card content-card" data-itemId="POKHARA">
<a href="/places/pokhara" data-href="/places/pokhara" data-position="1">  -->
<h3 class="card-heading"> 1. Pokhara </h3>
<div class="position-relative"> 
	<div class="collection-scrollable" data-hotel-position="1"> 
		<img class="card-img-top lazy" data-original="https://www.holidify.com/images/bgImages/POKHARA.jpg" src="/res/images/patt.png" alt="">
      <div class="card-body">
	
		    <p class="objective">
				
		      		1 out of 20 <br> Places to visit in Nepal
				
				
		      
		        <span class="divider"> </span>
		        34 <br> Tourist attractions
		      
		    </p>
		  
	
	
		<p class="card-text"> Pokhara, the 'Tourist Capital of Nepal,' is the second-largest city in this Himalayan country, after Kathmandu. At an altitude of more than 900m, it is one of the highest cities, making it the base for many world-famous treks. The highlight of the town is its Lakeside, which is a boating paradise fl... </p>
	
	

<p class="mb-3"><b>Best Time: </b> September to November </p> 


</div>

<!-- <div class="col-12 col-md-6 pr-md-3"> -->
	
<!-- <div class="card content-card" data-itemId="KATHMANDU"> 
	
		
 <a href="/places/kathmandu" data-href="/places/kathmandu" data-position="2">  -->
<h3 class="card-heading"> 2. Kathmandu </h3>
<div class="position-relative"> 
	         
      <div class="card-body">
	
		    <p class="objective">
				
		      		2 out of 20 <br> Places to visit in Nepal
				
				
		      
		        <span class="divider"> </span>
		        46 <br> Tourist attractions
		      
		    </p>
		  
		<p> Sprawled over its namesake valley surrounded by Himalayan mountains, Kathmandu is Nepal’s capital and most-visited destination, full of ancient temples, golden pagodas, natural beauty and fascinating villages. At an elevation of 4,344 feet, Kathmandu marks the confluence of the Bagmati and Vishnumat... </p>

<p class="mb-3"><b>Best Time: </b> September to November </p> 


</div>

<!-- <div class="col-12 col-md-6 pr-md-3"> -->
	

<!-- <div class="card content-card" data-itemId="LUMBINI">  -->
	
 <!-- <a href="/places/lumbini" data-href="/places/lumbini" data-position="3">  -->
<h3 class="card-heading"> 3. Lumbini </h3>
<div class="position-relative"> 

<div class="card-body">
	
		    <p>
				
		      		3 out of 20 <br> Places to visit in Nepal
				
				
		      
		        <!-- <span class="divider"> </span> -->
		        20 <br> Tourist attractions
		      
		    </p>
		<p> Nestled in the Himalayas in Nepal,&nbsp; the beautiful town of Lumbini is the birthplace of Lord Buddha. Lumbini is a&nbsp;UNESCO World Heritage Site with many ancient stupas dating back to 2000 years and monasteries built by past dynasties. People come here from all over the world to this abode of ... </p>
	
	






<p class="mb-3"><b>Best Time: </b> April to May </p> 


</div>

<h3 class="card-heading"> 4. Janakpur </h3>
<!-- <div class="position-relative">  -->

<div class="card-body">
	
		    <p>
				
		      		4 out of 20 <br> Places to visit in Nepal
				
				
		      
		        <span class="divider"> </span>
		        9 <br> Tourist attractions
		      
		    </p>
		  
	
	
		<p class="card-text"> Janakpur is a city in Nepal which is believed to be the birthplace of Goddess Sita and the place of her marriage with Lord Ram. Also known as the City of Ponds, Janakpur boasts of more than seventy ponds that dot its verdant landscape.&nbsp;Here you can learn more about the ancient and revered Hindu... </p>
	
	






<p class="mb-3"><b>Best Time: </b> September to March </p> 


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