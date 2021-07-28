<?php
	session_start();
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'user_details');

	$name =  $_POST['name'];
	$email =  $_POST['email'];
	$password =  $_POST['password'];

	$s = "select * from users where name = '$name';";
	$result=mysqli_query($con,$s);
		$num = mysqli_num_rows($result);
		if($num==1){
			echo "username already taken";
			echo "<a href = 'login.php'> Back to login</a>";

		}
		else{
			$reg = "insert into users (name, email, password)  values('$name','$email','$password')";
			mysqli_query($con,$reg);
			echo "Signup Successful";
			echo "<a href = 'login.php'> Back to login</a>";
		}
		
?>