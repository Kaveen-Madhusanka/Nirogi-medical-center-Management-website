<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		
		div.col{
			background-color: gray;
		}

	</style>
		
</head>
<body>

	<div class="all">
		<div class="topbar clearfix">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="logadmin.php">Admin</a></li>
					
				</ul>
			</div><!--topBarLinks-->
			
		</div><!--topbar-->


		<header class="clearfix">
			<div class="logo">
				<img style="width: 300px" src="img/niroga.png">
				
			</div><!--logo-->
			<div class="socialmedia">
				<ul>
					<li><a href="https://www.facebook.com/Nirogi-Medical-Center-297664291138200/"><img src="img/fb.png"></i></a></li>
					<li><a href="https://www.instagram.com/nirogimedicalcenter/?hl=en&fbclid=IwAR3tl1o1spP2rrsiUT3oMdXIbYI5eCnQP8eOJ7CKzfkafn77Y0kNQUi3-wA"><img src="img/insta.jpg"></i></a></li>
					<li><a href="https://twitter.com/CenterNirogi?fbclid=IwAR0rdmocN8cGTvSpJv7f6GWncdsfiUb9pfo_iio5L5duOmGRPKNi6enKFYQ"><img src="img/twitter.png"></i></a></li>
					<li><a href="https://plus.google.com/108626736288103864338"><img src="img/gp.png"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg"><img src="img/ytd.png"></i></a></li>
				</ul>
				
			</div><!--socialmedia-->
	</header>

	<nav>
			<ul>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href=""></a></li>
				<li><a href="login.php">Make Appointments</a></li>
					
				
			</ul>
	</nav>

	<article>

			<p>
				Built on a tradition of trust and dedication to its patients, Nirogi Medical Center looms as apremier health care provider.With a complete listing of services and specialty skills, Nirogi Medical Center is ready and capable to fill all your health care needs..
				Check us out...whether on-line or in person, Nirogi Medical Center is working for a healthier you, today and tomorrow.  
			</p>

	</article>


		<div class="midbanner clearfix">
		
		<!--<img src="img/mid.jpg">-->

					<div class="baner clearfix">
								
							<div id="slider">
								<div id="box">
									<img src="a.jpg">
								</div>

								<!-- buttons for controls slider -->
								<button class="prew " onclick="prewImage()"></button>
								<button class="next " onclick="nextImage()"></button>
							</div>



						  <script type="text/javascript">

						  	var slider_content = document.getElementById('box');

						  	// contain images in an array
						    var image = ['a','b', 'c', 'd','e'];

						    var i = image.length;


						    // function for next slide 

						    function nextImage(){
						    	if (i<image.length) {
						    		i= i+1;
						    	}else{
						    		i = 1;
						    	}
						    	  slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";
						    }


						    // function for prew slide

						    function prewImage(){

						    	if (i<image.length+1 && i>1) {
						    		i= i-1;
						    	}else{
						    		i = image.length;
						    	}
						    	  slider_content.innerHTML = "<img src="+image[i-1]+".jpg>";

						    }

						  
						  // script for auto image slider

						  setInterval(nextImage , 3000);

						  </script>

					</div><!--baner-->	

		</div><!--midbanner-->

		

		<div class="bottom clearfix">
			

			<div class="col">
				
				<h1>Our Service</h1>

				<li><h3>For Patients</h3></li>
					<p>The staff are capable of handling moderate degree accidental injuries to serious medical emergencies </p>
					<li><h3>For Staff</h3></li>
					<p>Opportunity to learn & grow with the quality and experience</p>
					<li><h3>Society</h3></li>
					<p>upliftment of the health standard in the society</p>
				</ul>

			</div><!--col-->

			<div class="col">
				
				<h1>Divisions</h1>
				<li><h3>Skin Care</h3></li>
					<p>Specilaization on skin injuries and alergies.  </p>
					<li><h3>Dental Care</h3></li>
					<p>We provide comfortable and personalized dental care in a relaxed environment. Whether you just need a routine checkup, hygiene cleaning, . </p>
					<li><h3>Vision Care</h3></li>
					<p>Professional sight checkups and caring for better vision.</p>
				</ul>

			</div><!--col-->

			<div class="col">
				
				<h1>Patient Care</h1>
				<ul>
					<li><h3>Nursing</h3></li>
					<p>Profession within the health care sector focused on the care of individuals, families, and communities. </p>
					<li><h3>Advisory Councils.</h3></li>
					<p>It provides feedback on proposed policy, program and organizational changes.</p>
					<li><h3>Infection Prevention and Control</h3></li>
					<p>Guidence toward a better healthy life. </p>
				</ul>

			</div><!--col-->

		</div><!--bottom-->
		<hr>

		<div class="partnars clearfix">
			
			<div class="item clearfix" style="background-color: black;">
				<marquee behavior=scroll direction="right" scrollamount="12">
				<img src="img/mar.png">
				</marquee>
				<marquee behavior=scroll direction="right" scrollamount="12"  bgcolor="maroon">
				<h2 style="color: white;"></h2>
				</marquee>
			</div>
			

		</div><!--partnars-->
		<hr>
			
		<div class="bottomdown">
			
			<div class="object">
				<h1>Nirogi Medical <br> center</h1>
				<p><b>Nirogi Medical Center and <br>channeling  center<b> <br>
					No: 278/5, Kurunagala Road, <br>Kondadeniya Street, Katugastota, <br>Sri Lanka.
					
				</p>
			</div>
			<div class="object clearfix">
				<h1>Contacts</h1>
				Hotline Numbers
				+94 115 321 000 - 30, +94 117 321 000 <br>	
				Emergency Case
				+94 112 667 769 <br>
				work place , Asiri 
				+94 112 685 806 <br>
				Lanka Hospital
				+94 115 650 666 <br>
				General Numbers
				+94 112 693 404, +94 112 692 272, +94 112 685 805 <br>
			</div>
			<div class="object clearfix">
				<h1>Linked Hospitals</h1>
				Lanka Hospital <br> <br>
				Nawaloka Hospital <br> <br>
				Asiri Hospital <br> <br>
				Suwasewana Hospital <br> <br>
				
			</div>

		</div><!--bottomdown-->

	</div><!--all-->

	

</body>
</html>