
<?php require_once('connection/conn.php');  ?>
<?php 
		
		$nic=$_GET["nic"];
		$name=$_GET["name"];
		$address=$_GET["address"];
		$sex=$_GET["gender"];
		$email=$_GET["Email"];
		$pass=$_GET["passord"];


		/*echo $pass;
		echo $name;
		echo $address;
		echo $sex;
		echo $email;*/

		$sql="insert into singup values('$nic','$name','$address','$sex','$email','$pass')";

		if (mysqli_query($connection,$sql)) {

			header('Location: login.php');
			 echo "account created";
		}
		else
		{
			echo "Error".mysqli_error($connection);
		}



	mysqli_close($connection);




 ?>