<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<div class="all">
		
		<div class="topbar clearfix" style="background : maroon;">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a style="margin-left: 400px;" href="index.php">HOME</a></li>
				</ul>
			</div><!--topBarLinks-->
			
		</div><!--topbar-->


		<header class="clearfix">
			<div class="logo">
				<img style="width: 300px" src="img/niroga.png">
				
				


			</div><!--logo-->
			<div class="socialmedia">
				<ul>
					<li><a href="https://www.nibm.lk"><img src="img/fb.png"></i></a></li>
					<li><a href="https://www.instagram.com/nibmpune"><img src="img/insta.jpg"></i></a></li>
					<li><a href="https://www.twitter.com/nibmofficial"><img src="img/twitter.png"></i></a></li>
					<li><a href="https://plus.google.com/108626736288103864338"><img src="img/gp.png"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg"><img src="img/ytd.png"></i></a></li>
				</ul>
				
			</div><!--socialmedia-->
	</header>
		<nav style="background : maroon;">
			<ul>
				<li><a href="#"></a></li>
				<li>About Us</li>
				<li><a href="#"></a></li>
					
				
			</ul>
		</nav>

		
			
			<h3 style="color: black; text-align: justify; padding-left: 80px; padding-right: 80px; ">The Built on a tradition of trust and dedication to its patients, Nirogi Medical Center looms as apremier health care provider.With a complete listing of services and specialty skills, Nirogi Medical Center is ready and capable to fill all your health care needs..
			Check us out...whether on-line or in person, Nirogi Medical Center is working for a healthier you, today and tomorrow. </h3>

		

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

		<table style="background-color: #3c3c3c;">
			<tr>
				<td width="500px;" style="padding-left: 100px;  color: white;"><h1><i>Our Mission</i></h1>
					<p><i>" The Doctors Clinic is a leader in healthcare quality. Our team provides comprehensive and compassionate healthcare service. We honor individuality, empower people through open and honest communication and strive to earn the loyalty of every person we serve. "</i></p>
				</td>
				<td  style="padding-left: 100px; color: white;"><h1><i>Our Vision</i></h1>
					<p><i>" Excellence in patient care and Quality service"</i></p>
				</td>
			</tr>


		</table>

		<table style="background-color: #3c3c3c">
			<tr>
				<td style="text-align: center;"> <h1>Medical Platform</h1>

					<i>To provide our patients with high quality, patient centred, holistic care, in a safe, responsive and courteous manner. 
						We strive to preserve the traditional values of primary care medicine, empowering our patients to fully participate in their own care.
					</i>
				</td>
			</tr>
		</table>

		<div class="marq">
			<marquee behavior=scroll direction="right" scrollamount="12" bgcolor="maroon">
					<img src="img/mar.png">
					
			</marquee>
			</div>	<!--mrq-->

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