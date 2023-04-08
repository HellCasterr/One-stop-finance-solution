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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index2.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style21.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mycsss.css">
<link rel="stylesheet" media="screen and (min-width: 426px) and (max-width: 768px)" href="tablet.css">
<link rel="stylesheet" media="screen and (max-width: 425px)" href="mobile.css">
</head>

<body>

               
<div class="login-form">

	
	
	
	<h1>Login Form</h1>
	<form action='#' method="post">
		<p>user_name</p>
		<input type="text" name="user_name" placeholder="user_name"><br><br>
		<p>password</p>
		<input type="password" name="password" placeholder="password"><br><br>
		<button type="Submit">Login</button><br><br>
		<a href="http://uims.cuchd.in/"><b>Forgot password?</b></a><br><br>
		<a href="signup2.php">Signup</a><br><br>
	</form>
</div>
</body>
</html>