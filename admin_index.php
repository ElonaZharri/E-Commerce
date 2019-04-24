<?php
	session_start();
	include 'connection.php';
	$link = connect();
?>

<!DOCTYPE> 

<html>
	<head>
		<title>Welcome Admin</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center;">Welcome Admin</h2>
			<a href="admin_users.php?admin_users">View Users</a>
			<a href="admin_products.php?admin_products">View Products</a>
			<a href="admin_orders.php?admin_orders">View Orders</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 

		if(isset($_GET['admin_users'])){
		
		include("admin_users.php"); 
		
		}
		if(isset($_GET['admin_products'])){
		
		include("admin_products.php"); 
		
		}
		if(isset($_GET['admin_orders'])){
		
		include("admin_orders.php"); 
		
		}
		
		
		?>
		</div>


	</div>


</body>
</html>
