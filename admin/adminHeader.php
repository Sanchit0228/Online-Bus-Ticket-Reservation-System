<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">   
		</noscript>
		<link rel="icon" href="favicon.ico">
		<style type="text/css">

			input {
				width:375px;
				display:block;
				border: 1px solid #999;
				height: 25px;
				-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
				-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			}

			input.button {
				width:100px;
				position:absolute;
				right:20px;
				bottom:20px;
				background:#09C;
				color:#fff;
				font-family: Tahoma, Geneva, sans-serif;
				height:30px;
				-webkit-border-radius: 15px;
				-moz-border-radius: 15px;
				border-radius: 15px;
				border: 1p solid #999;
			}

			input.button:hover {
				background:#fff;
				color:#09C;
			}

			form {
				background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
				background-color: whitesmoke;
				background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
				margin:auto;
				position:relative;
				width:550px;
				height:450px;
				font-family: Tahoma, Geneva, sans-serif;
				font-size: 14px;
				font-style: italic;
				line-height: 24px;
				font-weight: bold;
				color: #000000;
				text-decoration: none;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px;
				border-radius: 10px;
				padding:10px;
				border: 1px solid #999;
				border: inset 1px solid #333;
				-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
				-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
			}

			input::-webkit-input-placeholder {
				color: 	#f00;
			}

			textarea#feedback {
				width:375px;
				height:150px;
			}

			textarea.message {
				display:block;
			}

			h2 {
				color:red;
			}

            td{
	            color:white;
            }

			.major h1 {
				font-size: 3rem;
    			margin-bottom: 1rem;
			}

			.major h1 span {
				text-transform : uppercase;
				margin-left : 0.5rem;
			}

			.major h3 {
				font-size: 1.65rem;
			}

			.success {
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: column;
			}

			.message {
				font-size: 2rem;
				font-weight: bolder;
				margin-bottom: 2rem;
			}

			tbody {
				border: 2px solid mintcream;
			}

			table {
				display: flex;
    			justify-content: space-around;
			}

			td h4 {
				border-right: 2px solid mintcream;
				padding-right: 1rem;
			}

			.inside h3 {
				text-align: center;
				color: red;
				margin-bottom: 1rem;
			}

		</style>
	</head>

	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">KING of KINGS</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="history1.php">Booking History</a></li>
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
            <div class="container">

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major">
						<h1>
							Hello
							<span>
								<?php echo $_SESSION["username"];?>
							</span>
						</h1>
						<h3>Welcome to KING of KINGS</h3>
					</header>
				</div>
			