<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style type="text/css">

	body{
		background-color: #A0DEFF;
	}

	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
</style>
</head>
<body>

<?php require('inc/header.php'); ?>
<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Check Booking Availability</h5>
 			<form>
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-out</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Adult</label>
 						<select class="form-select shadow-none">
  					
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-2 mb-3">
 						<label class="form-label" style="font-weight: 500;">Children</label>
 						<select class="form-select shadow-none">
  						
  						<option value="1">One</option>
  						<option value="2">Two</option>
  						<option value="3">Three</option>
						</select>
 					</div>
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
 					</div>

 				</div>
 			</form>
 		</div>
 	</div>
 </div>
 
 <!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">P2000 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>
    			</div>

    			<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">P2000 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>
    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Simple Room Name</h5>
			    <h6 class="mb-4">P2000 per night </h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Rooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater
    				</span>

    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		5 Adults
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span>
    				</div>
    					
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>


 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
 		</div>
 	</div>	
 </div>

 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
 		</div>
 	</div>
 </div>

<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user 1</h6>
          </div>
          <p>
		  My stay at SOGOOD exceeded all expectations. The attention to detail throughout the hotel was impressive, from the elegant decor to the thoughtful amenities provided in the room. 
		  The staff was incredibly friendly and accommodating, making me feel right at home from the moment I walked through the door. 
		  The location was also perfect, with easy access to transportation and nearby attractions. 
		  I highly recommend SOGOOD to anyone looking for a luxurious and memorable stay.
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user 2</h6>
          </div>
          <p>
		  Staying at SOGOOD was an absolute delight! From the moment we arrived, we were greeted with warmth and hospitality. 
		  The room was spacious and impeccably clean, offering stunning views of the city skyline. 
		  The staff went above and beyond to ensure our stay was perfect, providing excellent recommendations for local attractions and dining options. 
		  We couldn't have asked for a better experience and will definitely be returning in the future
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Random user 3</h6>
          </div>
          <p>
		  I recently had the pleasure of staying at [Hotel Name] during a business trip, and I was thoroughly impressed. 
		  The room was well-appointed and comfortable, providing the perfect environment for both work and relaxation. 
		  The hotel's amenities, including the fitness center and on-site restaurant, were top-notch, and the complimentary breakfast exceeded my expectations. 
		  The staff was professional and attentive, ensuring that all of my needs were met throughout my stay. 
		  I wouldn't hesitate to book SOGOOD again for future trips. 
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR LOCATION</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
 		<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2079.402397201296!2d123.90687443797684!3d10.297694586034222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999c7d8a04abf%3A0x2dfc5468fc1dab3e!2sCTU%20Main%20-%20ICT%20Building!5e0!3m2!1sen!2sph!4v1715242017294!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
 		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 09095771337</a>
 				<br>
 				<a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 09095771337</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
<hr>
 <?php require('inc/footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>