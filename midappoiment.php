<?php require_once('connection/conn.php');  ?>
<?php 

		$nic=$_POST["nic"];
		$case=$_POST["case"];
		$date=$_POST["date"];
		$gender=$_POST["gender"];
		$tp=$_POST["tp"];
		
		
		
		

		echo $nic;
		echo $case;
		echo $date;
		echo $gender;
		echo $tp;
		

		$sql="insert into appoiment values('$nic','$case','$date','$gender','$tp')";

		if (mysqli_query($connection,$sql)) {
			
			header('Location: index.php');
			 echo "Issued appoiment";
		}
		else
		{
			echo "Error".mysqli_error($connection);
		}



		mysqli_close($connection);


 ?>