<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/navbar.css"></link>
		<title>Shopping Cart</title>

	   
		<link href="css/signin.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/signin.css" rel="stylesheet">
  </head>

  <body>
		<div id="navigation">
			<a href ="index.php">Home</a>
			<a></a>
			<a href ="signin.php">Login</a>
			<a></a>
			<a href ="about.php">About</a>
			<a href ="#"><?php echo  "Welcome,  " . $_SESSION['name'] . "! ";?></a>
		</div>
	</body>
	<center>
	<body>
		<header><h1 style="color:black"><center><span style="font-size:40pt">Thank You <?php echo  "  " . $_SESSION['name'] . " ";?></a> for shopping here at The Tie Guy! </span></center></h1><header>
	<body>
	<body>
		<header><h1 style="color:black"><center><span style="font-size:40pt">Your purchase has been finalized and is ready for pick up!</span></center></h1><header>
	<body>
	<body>
		<header><h1 style="color:gold"><center><span style="font-size:40pt">Please visit a The Tie Guy store near you to pick up your purchase!</span></center></h1><header>
	<body>
	</center>
</html>