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
            
            * {
            box-sizing: border-box;
            }

            /* Create two equal columns that floats next to each other */
            .column{
            float: left;
            width: 50%;
            padding: 10px;
            height: 400px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
            display: table;
            clear: both;
            }

            .column1 {
                float: left;
                width: 50%;
                padding: 10px;
                height: 250px;
                }

                /* Clear floats after the columns */
                .row1:after {
                
                display: table;
                clear: both;
                }

			
			
                div.gallery2 {
  border: 1px solid #ccc;
}

div.gallery2:hover {
  border: 1px solid #777;
}

div.gallery2 img {
  width: 100%;
  height: auto;
}

div.desc1 {
  padding: 15px;
  text-align: center;
  
}

* {
  box-sizing: border-box;
}

.responsive1 {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive1 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive1 {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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
					<li><a href="aboutus" class="active">About Us</a></li>
					<li><a href="service">Service</a></li>
					<li><a href="team">Team</a></li>
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
		<h1>About Us</h1>
    </div>
	<div class="aboutus">
        
            <div class="row">
            
                <div class="column">
                    
                <h2  style="color:#3b3a30";>Everything you need to know about us</h2>  
                    <p style="line-height:1.6; font-size:1em; text-align: justify;">This is a project we have undertaken as our final year project at College of Science and Technology. We have named our project as 
                    "Immediate Personal Security Service". We are member of four who have completed this project. The main objective for our is to create a wearable IOT device for the
                    security and shielding of women, girl children. A person can have werable watch with buttons on it and a belt for the next secuirty level. 
                    On pressing the button the information which includes the location of the person will be sent to the police security service who are responsible
                    for the immdiate movement to that victims location.
                    <br><br>
                    Motivation:
                    We feel that for gilrs there is exact need of the instrument at many situations. So we were very
                    much keen to work in this area. We could relate ourselves being attacked in such situations
                    and imagine how dreadful it can be for anyone to be in such situations. Rape is the one of the
                    major crime in the world practiced against Women. </p>
                </div>


               
                <div class="column">
                <h2 style="text-align:center; color:#3b3a30;">Team CST</h2>   
                <div class="row1">
                <div class="column1">
                    <div class="responsive">
                        <div class="gallery2">
                            <img src="img/kp.jpg" alt="image" width="60" height="40">
                            </a>
                            <div class="desc1">Kinzang Pelden <br>BE 4IT</div>
                        </div>
                    </div>
                </div>
                <div class="column1">
                    <div class="responsive">
                        <div class="gallery2">
                            <img src="img/rw.jpg" alt="image" width="60" height="40">
                            </a>
                            <div class="desc1">Rinchen Wangmo<br> BE 4IT</div>
                        </div>
                    </div>
                    
                    
                </div>
                </div>

                <div class="row1">
                <div class="column1">
                    <div class="responsive">
                        <div class="gallery2">
                            <img src="img/pg.jpg" alt="image" width="60" height="40">
                            </a>
                            <div class="desc1">Pema Gyalpo <br>BE 4IT</div>
                        </div>
                    </div>
                </div>
                <div class="column1">
                  <div class="responsive">
                        <div class="gallery2">
                            <img src="img/cy.jpg" alt="image" width="60" height="40">
                            </a>
                            <div class="desc1">Chening Yangden<br>BE 4IT</div>
                        </div>
                    </div>
                </div>
                </div>
                                </div>
                            </div>	
                    </div>


	</section>
	<aside>
		
		<div class="latest">
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
