
<?php require_once('connection/conn.php');  ?>

<?php 
	
	if (isset($_POST['email'])) {
		$uemail=$_POST['email'];
		$pass=$_POST['password'];

			//$sql="select * from singup where email='".$uemail."' AND password= '".$pass."' limit 1";
			//$result=mysqli_query($connection,$sql);
			if ($uemail == 'addmin' && $pass == 'add')
			{
				 //echo "login sucses";
				header('Location: view.php');
				echo "<script type='text/javascript'>alert('login sucess');</script>";

				
			}
			else
			{
				echo "<script type='text/javascript'>alert('login Fail check email and password ');</script>";
			}

		//echo $uemail;
		//echo $pass;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="all">
		<form method="POST" action="#">
			<h1>Login </h1>
			<div class="frm">
					<div class="form_input">
						
							<input type="text" name="email" id="eml" placeholder="Enter your email " required/>
					</div>
					<div class="form_input">
						
							
							<input type="password" name="password" id="pas" placeholder="Enter your password " required/>

					</div>

						<input type="submit" name="submit" value="login" class="btnlogin" >
			</div>
			<h2 style="color: white;">If you don't have account click signup </h2>
			<a style="color: white; font-size: 25px;" href="singup.php">Sign up</a>
		</form>

	</div><!--all-->

</body>
</html>