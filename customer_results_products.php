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
								<li><a href="home1.php" class="active">Home</a></li>
								
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="1dress.php">Dresses</a></li>
										<li><a href="2hairpins.php">Hair Pins</a></li> 
										<li><a href="3footwear.php">Foot Wear</a></li> 
										<li><a href="4tiara.php">Tiara</a></li> 
										<li><a href="5ring.php">Rings</a></li> 
                                    </ul>
                                </li>
                                
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a>
								
								</li>
							</ul>
						</div>
					</div>
					 <div>
                     <form method="get" action="customer_results_products.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search a Product"/ > 
                    <input type="submit" name="search" value="Search" />
                </form>
				</div>
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
	<h2 class="title text-center"><br>VIEW PRODUCT</h2>
<?php

    if(isset($_GET['search'])){
    
    $search_query = $_GET['user_query'];
    
    $get_pro = "select * from products where Pname like '%$search_query%'";

    $run_pro = mysqli_query($link, $get_pro);
    
    while($row_pro=mysqli_fetch_array($run_pro)){
    
        $pro_Pid = $row_pro['Pid'];
        $pro_Pname = $row_pro['Pname'];
        $pro_Pprice = $row_pro['Pprice'];
        $pro_image = $row_pro['image'];
        $pro_quantity = $row_pro['quantity'];
        echo "
                <div class='product-information'>
                
                    <img src='/~kimd35/1st_look/img/$pro_image'  />
                    <h4>Product name: $pro_Pname</h4>
                    <h5><b>Product price: $ $pro_Pprice </b></h5>
                <p><b> In Stock:  $pro_quantity </b></p>
                </div>
        
        
        ";
    
    }
    }
    ?>
    
    
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