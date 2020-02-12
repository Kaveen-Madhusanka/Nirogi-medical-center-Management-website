
<!DOCTYPE html>
<html>
<head>
	<title>appoiment</title>
	<link rel="stylesheet" type="text/css" href="css/appoiment.css">
</head>
<body>

	<div class="all">
		<div class="topbar clearfix">
			<div class="topBarLinks">
				<ul>
					<li><a href="singup.php">Sign up</a></li>
					<li><a href="about.php">About us</a></li>
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

	<nav>
			<ul>
				<li><a href="#"></a></li>
				<li>Make Appoiments</li>
				<li><a href="#"></a></li>
					
				
			</ul>
	</nav>
	<p>Built on a tradition of trust and dedication to its patients, Nirogi Medical Center looms as apremier health care provider.With a complete listing of services and specialty skills, Nirogi Medical Center is ready and capable to fill all your health care needs..
				Check us out...whether on-line or in person, Nirogi Medical Center is working for a healthier you, today and tomorrow.</p>
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

	
	<div class="bottom">
		<table>
			
			<tr> 
				<td>
					<div class="leftbottom ">
						<h3>Terms of Use</h3>
						<p>Self determined people want to be in charge of their own health and enjoy the life enhancing benefits modern medicine has to offer.</p>
						
							<p>It is our mission to provide you with the knowledge and the instruments to prevent nature from being the determining factor on how long, how active and how enjoyable your life will be.</p>
					</div><!--leftbottom-->
					
				</td>
				<td>
					
					<div class="rightbottom ">
			<div class="lform ">
		
				<form action="midappoiment.php" method="POST" enctype="multipart/form-data"  >

					<h3><table border="0" >
						<tr>
							<td>NIC NO:</td>
							<td><input type="text" name="nic" required></td>
						</tr>
						<tr>
							<td>Case Catogory :</td>
							<td><select name="case" id="cname" required>
								<option>diabetic</option>
								<option>consultant</option>
								<option>other</option>
							</td>
						</tr>
						
						<tr>
							<td>Appoiment date:</td>
							<td><input type="text" name="date" required></td>
						</tr>
						<tr>
							<td>Gender :</td>
							<td> <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</td>
						</tr>

						<tr>
							<td>Telephone No :</td>
							<td><input type="text" name="tp" required></td>
						</tr>
						
						<tr>
							<td></td>
							<td></td>
						</tr>

							<td> <input type="submit" id="Apply" value="Apply"></td>
							<td ><input type="reset" name="" value="Reset"></td>

						<tr>
							
						</tr>
					</table></h3>


				</form>

			</div><!--lform-->

		</div><!--rightbottom-->

				</td>
			</tr>

		</table>

	</div><!--bottom-->

		<div class="marq">
			<marquee behavior=scroll direction="right" scrollamount="12"  bgcolor="maroon">
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