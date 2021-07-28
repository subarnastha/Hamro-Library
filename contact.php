<?php
 $message_sent = false; 
 if(isset($_POST['email']) && $_POST['email'] !=''){
	 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$userName=$_POST['name'];
			$userEmail=$_POST['email'];
			$message=$_POST['message'];
			
			$to = "ronikgrg59@gmail.com";
			$body = "";
			
			$body .="From: ".$userName. "\r\n";
			$body .="Email: ".$userEmail. "\r\n";
			$body .="Message: ".$message. "\r\n";
			
			mail($to,$userName,$body,);
			 $message_sent = true;
	 }
	 		
	
 }



?>

<html>
	<head>
		<title>Contact us</title>
		<link rel="stylesheet" type="text/css" href="contact.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
	<p class="logo"><span>H</span>amro Library</p>
  <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="costumers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="books.php"class="icon-a"><i class="fa fa-book icons"></i> &nbsp;&nbsp;Books</a>
  <a href="#"class="icon-a"><i class="fa fa-thumbs-up icons"></i> &nbsp;&nbsp;Returned</a>
  <a href="#"class="icon-a"><i class="fa fa-thumbs-down icons"></i> &nbsp;&nbsp;Not Returned</a>
  <a href="#"class="icon-a"><i class="fa fa-address-card icons"></i> &nbsp;&nbsp;About Us</a>
  <a href="contact.php"class="icon-a"><i class="fa fa-envelope-square icons"></i> &nbsp;&nbsp;Contact</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <a href="logout.php"class="icon-a"><i class="fa fa-ban icons"></i> &nbsp;&nbsp;Logout</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Contact</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Contact</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/user1.png" class="pro-img" />
		<p>Romik Grg <span>Admin</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
</div>
 		<?php
			if($message_sent):
		 ?>
		 	<div class="h3">
			<h3">Thanks, We'll be in touch</h3>
			</div>
		<?php
		else:
		?>
		<div class="Contact-title">
			<h1>Hello</h1>
			<h2>We are always ready to help you!</h2>
		</div>
		<div class="contact-form">
			<form id="contact-form" method="post" action="contact.php">
				<input type="text" class="form-control" name="name"  placeholder="Your Name" required><br>
				<input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
				<textarea name="message" class="form-control" placeholder="Type your message here" rows="4" required></textarea><br>
				<input type="submit" class="btn" value="SEND MESSAGE">
			</form>
		</div>
		<?php
		endif;
		?>
		<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>
	</body>
</html>

