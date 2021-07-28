<?php
	session_start();
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'user_details');

	$name =  $_POST['name'];
	$password =  $_POST['password'];

	$s = "select * from users where name = '$name' && password = '$password';";
	$result=mysqli_query($con,$s);
		$num = mysqli_num_rows($result);
		if($num == 1){

			header('location:index.php');
		}
		else{
			echo "User Id or Password invalid";
			echo "<a href = 'login.php'> Back to login</a>";
		}
		
?>