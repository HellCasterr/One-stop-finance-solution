<?php 
session_start();

	include("connection2.php");
	include("functions2.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login2.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
    

<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<link rel="stylesheet"  href="style22.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mycsss.css">
<link rel="stylesheet" media="screen and (min-width: 426px) and (max-width: 768px)" href="tablet.css">
<link rel="stylesheet" media="screen and (max-width: 425px)" href="mobile.css">
</head>
<body>


<div class="login-form">
    <div class="signup-form">
	<h1>signup-Form</h1>
	<form action='#' method="post">
	
		
		    <p>user_name</p>
			<input id="text" type="text" name="user_name"><br><br>
			<p>password</p>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="signup"><br><br>

			<a href="login2.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>