<?php
session_start();
include 'connection.php';
$link = connect();
	$Cid=$_SESSION['id'];
	
		if(isset($_GET['add'])){
		    $x=((int)$_GET['add']);
		   
		   
$sql = "SELECT * FROM products WHERE Pid='$x' ";
$result= mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0){
		
?>
		
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
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
         
         
         <form method="post" action="">

<?php
			  while($row=mysqli_fetch_assoc($result)){
			   $Pid = $row['Pid'];
			   $Pname = $row['Pname'];
			   $Pprice = $row['Pprice'];
			   $image = $row['image'];
			   $quantity= $row['quantity'];
              
}
}
}
?>
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                        <img src = "img/<?php echo $image?>">
                    </div>
                </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2><?php echo $Pname?></h2>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                            <span>$<?php echo $Pprice?></span>
                            <label>Quantity:</label>
                            <input type="text" name="quantity" required />
                            <button type="submit" name="go" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> 1st Look</p>
                    </div><!--/product-information-->
                    
<?php
	if(isset($_POST['go'])){
	    
		    $userquantity=$_POST['quantity'];
		  if ($userquantity<1){
		      echo "Please insert a valid quantity.";
		      
		  }
		  
		  else{
		      
		 
		     if ($userquantity>$quantity){
		        
		         echo "Not enought items in stock.";
		     }
		     else {
		         $total=$Pprice * $userquantity;
		         $newdatabasequantity = $quantity - $userquantity;
		         $sql3 = "SELECT * FROM shoppingcart WHERE Pid='$Pid' AND Cid='$Cid'";
		         $result = mysqli_query($link,$sql3);
		         if(mysqli_num_rows($result) >= 1){
		             
		             echo "Item already in cart.";
		             echo " Go to cart for any updates.";
		             
		         }
		         else{
		              $sql2="INSERT INTO shoppingcart ( Cid, Pid, Pname, Pprice, total, quantity) VALUES ('$Cid','$Pid', '$Pname', '$Pprice','$total', '$userquantity')";
		                 mysqli_query($link,$sql2);
		                 echo "Succesfully added to cart.";
		                 
		                  $sql3="UPDATE products SET quantity='$newdatabasequantity' WHERE Pid='$x' ";
		                 mysqli_query($link,$sql3);
		                 

		         }
		     }
		  }
}
?>

                </div>
            </div><!--/product-details-->
         </form>
         
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



