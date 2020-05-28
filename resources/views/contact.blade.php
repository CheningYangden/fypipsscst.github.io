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

			table, th, td{
				width: 80%;
				
				border: 1px solid white;
				border-collapse: collapse;
				text-align: center;
				font-size: 15px;
				table-layout: fixed;
				background: #4682B4;
				padding: 10px;
				
				color: white;
				margin-top: 10px;	
			}
			th{
				background: #696969;
			}
			h3{
				color: #696969;
			}
			h2{
				color: #696969;
			}

			* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  display: table;
  clear: both;
}
p{
	font-size: 15px;
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
					<li><a href="gallery">Gallery</a></li>	
					<li><a href="contact" class="active">Contact</a></li>	
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
		<h1>Contact Us <img src="img/contact.png"></h1>
	</div>

	<div class="text">
		<p>Our system is to create a friendly environment in the society. "A small contribution can save one's life"</p>
	</div>
	
	<div class="layout">
	
		
			<table>
			<h3>Division III Phuntsholing <style="color: "></h3>
				
				<tr>
				
					<th>Location</th>
					<th>Telephone#</th>
					<th>Fax#</th>
				</tr>
				
				<tr>
					<td>Superintendent of Police</td>
					<td>05 - 252256</td>
					<td>05 - 252933</td>
			
				</tr>

				<tr>
					<td>Officer Incharge, Phuntsholing Main Gate</td>
					<td>05 - 252444</td>
					<td>---</td>
				</tr>
				<tr>
					<td>Officer Incharge, Gedu Police Station</td>
					<td>05 - 252292</td>
					<td>---</td>
				</tr>
				<tr>
					<td>Officer Incharge, Tsimasham Police Station</td>
					<td>05 - 282113</td>
					<td>---</td>
				</tr>
				<tr>
					<td>Rinchending Check Post</td>
					<td>08 - 478225</td>
					<td>---</td>
				</tr>
				<tr>
					<td>Pasakha Police Station</td>
					<td>05 - 252318</td>
					<td>---</td>
				</tr>
				<tr
				><td>Tanalum Check Post</td>
				<td>08 - 471048</td>
				<td>---</td>
				</tr>
				<tr>
					<td>Officer Incharge Y.D.R.C, Tsimasham</td>
					<td>08 - 478376</td>
					<td>08 - 478505</td>
				</tr>
				

			</table>
			<div class="row" style="padding-left: 5px; padding-top: 20px;">
				<div class="column" style="padding-left: 5px;">
					<h2>Contact Numbers</h2>
					<div>
						<p>Phuentsholing OC - 77109888</p>
						<p>Phuentsholing Traffic - 17808080</p>
					</div>

					<div class="sc"  style="padding-top: 300px;">
						<p>Name: Ugyen Zangmo
							<br><br>
							#17307971
						</p>
					</div>
					
					

				</div>
				<div class="column" style="padding-left: 1px;">
					
					<div class="gallery">
		
					<img src="img/t33.jpg">
					
						<div class="desc">Emergency Contact Team</div>
					</div>

					<div class="gallery">
		
						<img src="img/t2.jpg" alt="Cinque Terre" width="600" height="400"></a>
						<div class="desc">Service Contact person</div>
					</div>


				</div>
			</div>
	
	</div>


	</section>
	<aside>
		
		<div class="latest" style="padding-top: 600px;">
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
