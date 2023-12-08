<?php 
	// if(isset($_SESSION["user"])) {
	// 	header("Location: index.php");
	// }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       	<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="icon" href="favicon.ico">
		<style>
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images1/login.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			a {
    			color: hotpink;
			}
			h1 {
    			color:white;
			}	
		</style>
    </head>
    <body >
		<header id="header">
			<h1><a href="index.php">KING of KINGS</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index4.php">Users</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<div class="container">
		<?php
		  session_start();
		 if(isset($_SESSION['msg']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center> <i>';
			echo $_SESSION['msg'];
			echo "</i></center></font></p>";
			unset($_SESSION['msg']);
		}
		 if(isset($_SESSION['reg']))
		{
			echo '<p class="message"> <font size="5" color="White"><center> <i>';
			echo $_SESSION['reg'];
			echo "</i> <center></font></p>";
			unset($_SESSION['reg']);
		}
		if(isset($_SESSION['reg_error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['reg_error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['reg_error']);
		}
		if(isset($_SESSION['change']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['change'];
			echo "</i> </center></font></p>";
			unset($_SESSION['change']);
		}

		if(isset($_POST["submit"])) {

			include "include.php";
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);

			$sql = "SELECT UserID, Username FROM user WHERE Username = '{$username}' AND password= '{$password}'";

			$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

			if(mysqli_num_rows($result) == 0)
			{
				$error = "Username and Password not matched!!!";
				echo '<p class="error-message"> <font size="6" color="Red"> <center><i>';
				echo $error;
				echo "</i> </center></font></p>";

			}
			else
			{
				while($row = mysqli_fetch_assoc($result)) {
					$username = $_POST["username"];
					$userid = $row["UserID"];
					$_SESSION["username"] = $row['Username'];
					$_SESSION["user_id"] = $row['UserID'];
					//print_r($_SESSION);

					header("Location: generic.php?username=".$username."&userid=".$userid."");
				}	
				
			}
		}
		?>
		<section class="main">
			<form class="form-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST" >
				<h1>Login</h1>
				<p>
					Username
					<input type="text" class="form-control" name="username" placeholder="eg:Johannes" required>
				</p>
				<p>
					Password
					<input type="password" class="form-control" name='password' placeholder="eg:Johannes123" required>
				</p>
				<p>
					<input type="submit" class="btn btn-primary" name="submit" value="Continue">
				</p>
				<p>
					&nbsp;
					<a href="register1.php"> Register Now</a>
				</p>
			</form>​
		</section>
		</div>
		<?php
			include "footer.php";
		?>

