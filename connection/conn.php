<?php

	
	$connection = mysqli_connect('localhost','root', '','medical');



	if (mysqli_connect_errno()) {
		die('database connection faild' .mysql_connect_error());
	}else{
		//echo "connection sucsesful"; 
	}




 ?>