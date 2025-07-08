<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HOTELES EKOC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">HOTELES<span> EKOC</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#inicio" class="nav-link">Inicio</a></li>
			  <li class="nav-item active"><a href="#reservaciones" class="nav-link">Reservaciones</a></li>
	          <li class="nav-item"><a href="#habitaciones" class="nav-link">Nuestras habitaciones</a></li>
	          <li class="nav-item"><a href="#nosotros" class="nav-link">Nosotros</a></li>
	          <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
			  <li class="nav-item"><a href="{{ route('login') }}" style="color: white" class="nav-link">Inicio de sesión</a></li>
			  <li class="nav-item"><a href="{{ route('register') }}" style="color: white" class="nav-link">Registro</a></li>
	        </ul>
            {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" style="color: white" class="nav-link">Inicio de sesión</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="color: white" >Registro</a>
                            @endif
                        @endauth
                    </div>
                @endif
	      </div> --}}
	    </div>
	  </nav>
    <!-- END nav -->

    <!-- inicio del inicio -->
		<div id="inicio" class="hero">
	    <section class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url({{ asset('assets/images/bg_1.jpg') }});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2>Mas que un Hotel... es experiencia </h2>
		            <h1 class="mb-3">Hotel para toda la familia, todo el año</h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url({{ asset('assets/images/bg_2.jpg') }});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2>Conoce todas las sucursales de nuestros HOTELES EKOC</h2>
		            <h1 class="mb-3">Sientete como en tu propia casa</h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	  </div>

    <section  class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div id="reservaciones" class="container">
    		<div class="row no-gutters">
    			<div class="col-lg-12">
    				<form action="#" class="booking-form aside-stretch">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-4">
				    					<label for="#">Fecha de entrada</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-4">
				    					<label for="#">Fecha de salida</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-4">
			      					<label for="#">Habitación</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">Suite</option>
			                      <option value="">Familiar</option>
			                      <option value="">Deluxe</option>
			                      <option value="">Clasico</option>
			                      <option value="">Superior</option>
			                      <option value="">Luju</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap align-self-stretch py-3 px-4">
			      					<label for="#">Huespedes</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">1 personas</option>
			                      <option value="">2 personas</option>
			                      <option value="">3 personas</option>
			                      <option value="">4 personas</option>
			                      <option value="">5 personas</option>
			                      <option value="">6 personas</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <a href="{{ route('register') }}" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block"><span>Consultar disponibilidad <small>Tenemos los mejores precios</small></span></a>
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>

    
		<section id="servicios"  class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">ALGUNOS DE LOS SERVICIOS QUE OFRECEMOS</span>
            <h2 class="mb-4">Nunca querrás irte</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Servicio amigable</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Tomar el desayuno</h3>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Servicio de traslado</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Trajes &amp; SPA</h3>
              </div>
            </div>      
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="ion-ios-bed"></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">Habitaciones acogedoras</h3>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
<!-- fin de inicio  -->

<!-- incio de nosotros -->
    <section id="nosotros" class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url({{ asset('assets/images/about-1.jpg') }});"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url({{ asset('assets/images/about-2.jpg') }});"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Acerca de las sucursales</span>
	            <h2 class="mb-4">Hoteles EKOC, el Hotel mas recomendado en todo el mundo </h2>
	          </div>
	          <p> Visita nuestras sucursales y reserva tu destino con seguridad</p>
	          <p><a href="{{ route('register') }}"  class="btn btn-secondary rounded">Reserva tu habitacion ahora</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="testimony-section">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img aside-stretch-2" style="background-image: url({{ asset('assets/images/testimony-img.jpg') }});"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-4">
	          		<span class="subheading">Testimonios</span>
			          <h2 class="mb-0">Clientes satisfechos</h2>
			        </div>
	            <div class="carousel-testimony owl-carousel ftco-animate">
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Reserve una habitación en el hotel Virginia, sus servicios fueron excelentes</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Gerald Hodson</p>
		                    <span class="position">Hombre de negocio</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Reserve una habitación en el hotel El dorado, sus servicios fueron excelentes con excelentes vistas</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Patrick Morgan</p>
		                    <span class="position">Actor</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Reserve una habitación en el hotel Cadis, sus servicios fueron excelentes y su personal amigable</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('assets/images/person_3.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name"> Simon Miller</p>
		                    <span class="position">Coronel</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                    <p class="mb-4">Reserve una habitación en el hotel Virginia, con precios excelentes y servicios amigables</p>
	                  </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url({{ asset('assets/images/person_4.jpg') }})">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Sebastian Parker</p>
		                    <span class="position">Estudiante</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>
<!-- fin de nosotros -->

<!-- inicio de habitaciones -->
    <section id="habitaciones" class="ftco-section ftco-no-pb ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Habitaciones de las sucursales del hotel EKOC</span>
            <h2 class="mb-4">Habitaciones de nuestros hoteles</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/room-6.jpg') }});"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$90.00</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habitación King</a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}"  class="btn-custom px-3 py-2 rounded">reservar <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/room-1.jpg') }});"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$70.00</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habitación Suite </a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}"  class="btn-custom px-3 py-2 rounded">reservar <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img order-md-last" style="background-image: url({{ asset('assets/images/room-2.jpg') }});"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$40.50</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habitación familiar</a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}"  class="btn-custom px-3 py-2 rounded">reservar<span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img order-md-last" style="background-image: url({{ asset('assets/images/room-3.jpg') }});"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$43.00</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habitación Deluxe</a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}"  class="btn-custom px-3 py-2 rounded">reservar <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/room-4.jpg') }});"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habtación de lujo</a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}" class="btn-custom px-3 py-2 rounded">reservar <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url({{ asset('assets/images/room-5.jpg') }});"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$66.56</span> <span class="per">por noche</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Habitación superior</a></h3>
	    						<p class="pt-1"><a href="{{ route('register') }}" class="btn-custom px-3 py-2 rounded">reservar <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<!-- fin de habitaciones -->


<!-- inicio de fotos -->
    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Fotos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('assets/images/insta-1.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('assets/images/insta-1.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('assets/images/insta-2.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('assets/images/insta-2.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('assets/images/insta-3.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('assets/images/insta-3.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('assets/images/insta-4.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('assets/images/insta-4.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{ asset('assets/images/insta-5.jpg') }}" class="insta-img image-popup" style="background-image: url({{ asset('assets/images/insta-5.jpg') }});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
<!-- fin de fotos  -->

<!-- inicio de contactos -->
    <footer id="contacto"class="ftco-footer ftco-section img" style="background-image: url({{ asset('assets/images/bg_4.jpg') }});">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hoteles EKOC</h2>
              <p>Comunicate con nosotros para mayor información</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Compañia</h2>
              <ul class="list-unstyled">
                <li><a href="#servicios" class="py-2 d-block">Servicios</a></li>
                <li><a href="#nosotros" class="py-2 d-block">Nosotros</a></li>
                <li><a href="#habitaciones" class="py-2 d-block">Habitaciones</a></li>
                <li><a  class="py-2 d-block">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tienes alguna pregunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Registrate y revisa nuestras sucursales</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+593 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">hotelesEKOC@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
 <!-- fin de contactos -->
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
    
  </body>
</html>