<?php
	session_start();
	include 'connection.php';
	$link = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>1ST LOOK</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<body> 

    <header id="header"><!--header-->
		<div class="header-middle"><!--header-top-->
			<div class="container">
				<div class="row" >
					<div class="col-sm-8">
						<div class="shop-menu pull-left">
							<ul class="nav navbar-nav">
							    <li><?php echo "Welcome: ", $_SESSION['firstname'] ?></li>
								<li><a href="admin.php" class="active">Home</a></li>
								<li><a href="admin_users.php?admin_users">Manage Users</a></li>
                                <li><a href="admin_products.php?admin_products">Manage Products</a></li>
								<li><a href="admin_orders.php?admin_orders">Manage Orders</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
	
	<section>
		<div class="container">
				<!--<div class="col-sm-9 padding-right">-->
					<div class="features_items"><!--dresses-->
						<h2 class="title text-center"><br>Welcome Admin</h2>
					
							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/8.Mint-Candy-Apple.jpg" alt="" /><br></br>
											<a href="admin_products.php" class="btn btn-default add-to-cart">Dresses</a>
										</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/19.All-Daisy-Long.jpg" alt="" /><br></br>
										<a href="admin_products.php" class="btn btn-default add-to-cart">Hair Pins</a>
									</div>
								</div>
							</div>
						</div>
						
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/24.Picked-to-Perfection.jpg" alt="" /><br></br>
										<a href="admin_products.php" class="btn btn-default add-to-cart">Foot Wear</a>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/25.Cherry on Top.jpg" alt="" /><br></br>
										<a href="admin_products.php" class="btn btn-default add-to-cart">Tiara</a>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/29.Minimally-Modest.jpg" alt="" /><br></br>
										<a href="admin_products.php" class="btn btn-default add-to-cart">Rings</a>
									</div>
								</div>
							</div>
						</div>

				</div>
			<!--</div>-->
		</div>
	</section>
	
	<div class="main_wrapper">
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		
		<?php 
		if(isset($_GET['admin_index'])){
		
		include("admin.php"); 
		
		}
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
	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-2"><!--Container 1-->
						<div class="companyinfo">
							<h2><span>1ST</span>LOOK</h2>
							<p>Best Korean Outfit</p>
						</div>
					</div><!--End Container 1-->

					
					<div class="col-sm-2"><!--Container 2-->
						<div class="#">
							
						</div>
					</div><!--End Container 2-->
					
					
						<div class="col-sm-2"><!--Container 3-->
						<div class="companyinfo">
							<h2><span>Contact Us</span></h2>
							<p>Email: 1stlook@gmail.com</p>
							<p>Phone: 201-666-5544</p>
						</div>
					</div><!--End Container 3-->
					
						<div class="col-sm-2"><!--Container 4-->
						<div class="#">
							
						</div>
					</div><!--End Container 4-->
					
					<div class="col-sm-3"><!--Container 5-->
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>1 Normal Ave, Montclair, NJ</p>
						</div>
					</div><!--End Container 5-->
				</div>
			</div>
		</div>
	</footer><!--/Footer-->

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

	
</body>
</html>
