<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="Description" content="A Registration Form">
  	<meta name="Author" content="Nanda">
  	<center><h1>Sign In Page</h1></center>
</head>
	<style>
		body
		{
			background-image:url("images/yellow.jpg");
    		background-repeat:no-repeat;
    		background-size: cover;
			margin-left:200px;
			margin-right:200px;
			margin-top:100px;
		}
		table
		{
			background-color:#BAC8DF;
			border-radius:20px;
			border:1px solid;
		}
		.table
		{
			background-color:#484646;
			border-radius:20px;
			font-color:white;
			border:1px solid;
			opacity:0.8;
		}
		form{
			text-align:justify;
			font-size:20px;
		}
		input
		{
  			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
 			border-radius: 17px;
    		border:solid 1px;
   			padding:10px;
		}
		.text
		{
			width:200px;
		}
		.button 
		{
    		background-color: white;
    		border:2px solid #484646;
    		width:200px;
    		color: black;
    		padding: none;
   			text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
		}
		.button:hover
		{
			background-color: #392F2F;
    		color: white;
		}
	</style>
	<body>
	<link rel="stylesheet" type="text/css" href="Horizontal.css">
	<ul>
  			<!-- <li style="float:left"><a class="active"href="Home.php">Home</a></li>
  			<li><a href="PersonalDetails.php">About</a></li>
  			<li><a href="Signin.php">Application</a></li>
  			<!-- <li><a href="Registration.php">Register</a></li> -->
  			<li><a href="">Admin</a></li>
  			<li><a href="Donation.php">Donate</a></li>
  			<li><a href="Donation.php">Sponsor</a></li>
  			<li><a href="">Contact Us</a></li>
  			<li><a href="">FAQ</a></li>
  			<li><a href="">Feedback</a></li> -->
	</ul></align>
	<table>
	<table cellpadding="15" align="center" class="table">
	<form action="" method="POST">
	<tr>
		<td>Email ID:</td>
		<td><input type="email" class="text" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td><br>
		<td><input type="password" class="text" name="password"></td>
	</tr>
	</table><br>
	<center><b><input type="submit" class="button" name="login" value="Sign In"></b></center><br>
		<center><input type="reset" class="button" name="reset" value="Clear"></center><br>
		<center><b><input type="submit" class="button" name="register" value="Register"></b></center><br>
		</table>
	<h3><center><a href="Home.php">Home</a></center></h3>
	</body>
</html>

<?php

require('db.php');
	// if(isset($_POST['login'])){
	// $host = "localhost";
	// $user = "root";
	// $password = "";
	// $db = "scholarshipproject";
	// $result1=false;
	// $conn = mysqli_connect($host,$user,$password);
	// mysqli_select_db($conn,$db);
	// if(isset($_POST['Email'])){
	// $Em = $_POST['Email'];
	// $password = $_POST['pass'];

	if (isset($_POST['email'])){
		$email = stripslashes($_REQUEST['email']); 
		$email = mysqli_real_escape_string($con,$email);
		
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
	$sql = "select * from registration where email = '".$email."'AND password = '".$password."' limit 1";
	$result = mysqli_query($con,$sql);
	if(($result)){
		
		//echo "<script type='text/javascript'>alert('')</script>";
		header("Location: PersonalDetails.php");
		exit();
		        echo "<script>window.open('welcome.php','_self')</script>";

	}
	
	}


if(isset($_POST['register'])){
		header("Location: Registration.php");
	}

?>