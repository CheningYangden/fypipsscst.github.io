<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
	<title>SocialSecurityService</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<meta name="viewport" content="widt=device-width, intial-scale=1"></meta>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           
            
           
            .top-right {
                position: absolute;
                right: 100px;
                top: 25px;
            }

           
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
			}

			
			


	
        </style>
    </head>
    <body>
        

    <header>
	<div class="main">	
			<div class="nav">
				<div class="logo">
					<img src="img/logo2.png" width="120" height="40"></img>
				</div>	 
				<ul>
					<li><a href="welcome">Home</a></li>
					<li><a href="aboutus">About Us</a></li>
					<li><a href="service">Service</a></li>
					<li><a href="team">Team</a></li>
					<li><a href="gallery" class="active">Gallery</a></li>	
					<li><a href="contact">Contact</a></li>	
                	<div class="flex-center position-ref full-height">
            			@if (Route::has('login'))
               				 <div class="top-right links">
                   				 @auth
                        		<a href="{{ url('/home') }}">Home</a>
                    			@else
                      			 <li> <a href="{{ route('login') }}">Login</a><li>

                       			 @if (Route::has('register'))
                            	<li><a href="{{ route('register') }}">Register</a></li>
                       			 @endif
                   				 @endauth
                			</div>
            			@endif
			
					</div>
				</ul>
			</div>
			
	</div>
		
		<div class="title">
			<h1>Immediate Personal Security Service</h1>
			<p>We are the developers from team CST.</p>
		</div>
	</header><!-- #header -->
	<section>
	<div class="services">
		<h1>Latest From Our Gallery</h1>
	</div>

	<div class="text">
		<p>Our system is to create a friendly environment in the society. "A small contribution can save one's life"</p>
	</div>
	
	<div class="layout">
        
	<!-- <div class="g1">
            <img src="img/g1.jpg" alt="Northern Lights">
             <img src="img/g2.jpg">
        </div>
        <div class="g2">
            <img src="img/g3.jpg" alt="Northern Lights">
             <img src="img/g4.jpg">
             <img src="img/g5.jpg">
        </div> -->
		<div class="forgallery">
			<a href="img/g10.jpg" data-lightbox="mygallery" data-tittle="image"><img src="img/g10.jpg"></a>
			<a href="img/g2.jpg" data-lightbox="mygallery"><img src="img/g2.jpg"></a>
			<a href="img/g6.png" data-lightbox="mygallery"><img src="img/g6.png"></a>
			<a href="img/g8.jpg" data-lightbox="mygallery"><img src="img/g8.jpg"></a>
			<a href="img/g9.jpg" data-lightbox="mygallery"><img src="img/g9.jpg"></a>
			<a href="img/g1.jpg" data-lightbox="mygallery"><img src="img/g1.jpg"></a>
			<a href="img/g11.jpg" data-lightbox="mygallery"><img src="img/g11.jpg"></a>
			<a href="img/g12.jpg" data-lightbox="mygallery"><img src="img/g12.jpg"></a>
			<a href="img/g13.png" data-lightbox="mygallery"><img src="img/g13.png"></a>
			<a href="img/g14.jpg" data-lightbox="mygallery"><img src="img/g14.jpg"></a>

		</div>
        
        

    	
	</div>


	</section>
	<aside style="padding-top: 0px;">
		
		<div class="latest" style="padding-top: 100px;">
			<h1>Latest News</h1>
			<div class="news">
				<p>Who are in extremely love with eco friendly system.</p>
			</div>
		</div>
		
		<div class="layout1">
	
			<div class="gallery1">
				<a target="_blank" href=""></a>
				<div class="desc">Expert Technicians</div>
					<div class="technician">
							<p>A computer technician will also come to your help whenever you
								will need some repair and maintenance of your computer. When it comes to diagnosing a fault on your computer, having a friend 
								that is an experienced computer professional can be of huge assitance.
							</p>
					</div>
				
				
			</div>

			<div class="gallery1">
				<a target="_blank" href=""> </a>
				<div class="desc">Professional Service</div>
				<div class="technician">
							<p>A computer technician will also come to your help whenever you
								will need some repair and maintenance of your computer. When it comes to diagnosing a fault on your computer, having a friend 
								that is an experienced computer professional can be of huge assitance.
							</p>
					</div>
					
			</div>

			<div class="gallery1">
				<a target="_blank" href=" "></a>
			<div class="desc">Great Support</div>
				<div class="technician">
							<p>A computer technician will also come to your help whenever you
								will need some repair and maintenance of your computer. When it comes to diagnosing a fault on your computer, having a friend 
								that is an experienced computer professional can be of huge assitance.
							</p>
					</div>
			</div>
		</div>
	
	</aside>
	
<footer>
	<div class="footer1">
		<p class="footer-text">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> College of Science and Technology<i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p >
		<p class="footer-text">Group5</p>
	</div>
</footer>	


            











    </body>
</html>
