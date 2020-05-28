<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
	<title>SocialSecurityService</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
					<li><a href="team" class="active">Team</a></li>
					<li><a href="gallery">Gallery</a></li>	
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
		<h1>Experienced Mentor Team</h1>
	</div>

	<div class="text">
		<p>Our system is to create a friendly environment in the society. "A small contribution can save one's life"</p>
	</div>
	
	<div class="layout">
	
		<div class="gallery">
			
			<img src="img/t5.jpg" alt="Cinque Terre" width="600" height="400"></a>
			<div class="desc">Admin</div>
        </div>
        <div class="gallery">
			
			<img src="img/t1.jpg" alt="Cinque Terre" width="600" height="400"></a>
			<div class="desc">24/7 service team</div>
        </div>
        <div class="gallery">
		
			<img src="img/t4.jpg" alt="Cinque Terre" width="600" height="400"></a>
			<div class="desc">Maintainance Team</div>
        </div>
        <div class="gallery">
		
			<img src="img/t2.jpg" alt="Cinque Terre" width="600" height="400"></a>
			<div class="desc">Service Contact person</div>
        </div>
        

		<div class="gallery">
		
		<img src="img/t3.jpg" alt="Forest" width="600" height="400">
		
			<div class="desc">Emergency Contact Team</div>
		</div>

		<div class="gallery">
		
		<img src="img/t6.jpg" alt="Northern Lights" width="600" height="400">
		
		<div class="desc">Expert Technician</div>
		</div>
	</div>


    </section>
    
	<aside>
    
		
		<div class="latest">
        <br><br> <br><br>  <br><br><br><br> <br><br>  <br><br><br><br> <br><br>  <br><br><br><br>
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
