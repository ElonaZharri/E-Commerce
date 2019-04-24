<?php
	session_start();
	include 'connection.php';
	$link = connect();
		$Cid=$_SESSION['id'];
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
								<li><a href="home1.php">Home</a></li>
								
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="1dress.php">Dresses</a></li>
										<li><a href="2hairpins.php">Hair Pins</a></li> 
										<li><a href="3footwear.php">Foot Wear</a></li> 
										<li><a href="4tiara.php">Tiara</a></li> 
										<li><a href="5ring.php">Rings</a></li> 
                                    </ul>
                                </li>
                                
								<li><a href="cart.php" class="active"><i class="fa fa-shopping-cart"></i>Cart</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a>
								
								</li>
							</ul>
						</div>
					</div>
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
			   
	<section id="cart_items">  <!--/#cart_items-->
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="home1.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					    
		<?php
		////////////////////////////////////////////////////////ADD////////////////////////////////
	if(isset($_GET['add'])){
	      $x=((int)$_GET['add']);
	     $sql3 = "SELECT quantity FROM products WHERE Pid='$x'";
	     $result3= mysqli_query($link,$sql3);
	     
	     if(mysqli_num_rows($result3)){
		    	while($row=mysqli_fetch_assoc($result3)){
		    	   $originalquantity= $row['quantity'];
		    	}
	     }
	     
	     $sql4 = "SELECT quantity, Pprice, total FROM shoppingcart WHERE Pid='$x'AND Cid='$Cid'";
	     $result4= mysqli_query($link,$sql4);
	     
	     if(mysqli_num_rows($result4)){
		    	while($row2=mysqli_fetch_assoc($result4)){
		    	   $userquantity= $row2['quantity'];
		    	   $userprice = $row2['Pprice'];
		    	    $usertotal = $row2['total'];
                    $newquantity= $userquantity + 1;
                    $newtotal=$usertotal + $userprice;
                    $originalquantitydecrease= $originalquantity - 1;

		    	}
	     }
                    if ($originalquantitydecrease > 1){
    
                   $sql5 = " UPDATE shoppingcart SET quantity='$newquantity', total='$newtotal' WHERE Cid='$Cid' AND Pid='$x'";
	               $result5= mysqli_query($link,$sql5);

	               $sql6 = " UPDATE products SET quantity='$originalquantitydecrease' WHERE Pid='$x'";
	               $result6= mysqli_query($link,$sql6);
        }
	}
		////////////////////////////////////////////////////////SUB ////////////////////////////////
			if(isset($_GET['remove'])){
	      $x=((int)$_GET['remove']);
	     $sql3 = "SELECT quantity FROM products WHERE Pid='$x'";
	     $result3= mysqli_query($link,$sql3);
	     
	     if(mysqli_num_rows($result3)){
		    	while($row=mysqli_fetch_assoc($result3)){
		    	   $originalquantity= $row['quantity'];
		    	}
	     }
	     
	     $sql4 = "SELECT quantity, Pprice, total FROM shoppingcart WHERE Pid='$x'AND Cid='$Cid'";
	     $result4= mysqli_query($link,$sql4);
	     
	     if(mysqli_num_rows($result4)){
		    	while($row2=mysqli_fetch_assoc($result4)){
		    	   $userquantity= $row2['quantity'];
		    	   $userprice = $row2['Pprice'];
		    	    $usertotal = $row2['total'];
                    $newquantity= $userquantity - 1;
                    $newtotal=$usertotal - $userprice;
                    $originalquantitydecrease= $originalquantity + 1;
		    	}
	     }
                    if ($newquantity > 0){
                   $sql5 = " UPDATE shoppingcart SET quantity='$newquantity', total='$newtotal' WHERE Cid='$Cid' AND Pid='$x'";
	               $result5= mysqli_query($link,$sql5);
	               
	               $sql6 = " UPDATE products SET quantity='$originalquantitydecrease' WHERE Pid='$x'";
	               $result6= mysqli_query($link,$sql6);
}
else {
    $sql7="DELETE FROM shoppingcart WHERE Cid='$Cid' AND Pid ='$Pid'";
     $result7= mysqli_query($link,$sql7);
        }
	}
		///////////////////////////DELETE/////////////////////////
					if(isset($_GET['delete'])){
	      $x=((int)$_GET['delete']);
	     $sql3 = "SELECT quantity FROM products WHERE Pid='$x'";
	     $result3= mysqli_query($link,$sql3);       
	     
	     if(mysqli_num_rows($result3)){
		    	while($row=mysqli_fetch_assoc($result3)){
		    	   $originalquantity= $row['quantity'];
		    	}
	     }
	     
	     $sql4 = "SELECT quantity, Pprice, total FROM shoppingcart WHERE Pid='$x'AND Cid='$Cid'";
	     $result4= mysqli_query($link,$sql4);
	     
	     if(mysqli_num_rows($result4)){
		    	while($row2=mysqli_fetch_assoc($result4)){
		    	   $userquantity= $row2['quantity'];
		    	   $userprice = $row2['Pprice'];
		    	    $usertotal = $row2['total'];
                    $newquantity= $userquantity - 1;
                    $newtotal=$usertotal - ($userprice * $userquantity);
                    $originalquantitydecrease= $originalquantity + $userquantity;
		    	}
	     }
                    if ($userquantity >= 1){
                   $sql5 = " DELETE FROM shoppingcart WHERE Cid='$Cid' AND Pid='$x'";
	               $result5= mysqli_query($link,$sql5);
	               
	               $sql6 = " UPDATE products SET quantity='$originalquantitydecrease' WHERE Pid='$x'";
	               $result6= mysqli_query($link,$sql6);
        }
	}
		//////////////End DELETE////////
			            $sql2 = "SELECT shoppingcart.Pid, products.image, shoppingcart.Pname, shoppingcart.Pprice, shoppingcart.total, shoppingcart.quantity FROM products INNER JOIN shoppingcart ON shoppingcart.Pid = products.Pid 
			            WHERE shoppingcart.Cid='$Cid'";
	                     $result2= mysqli_query($link,$sql2);

		  	if(mysqli_num_rows($result2) >= 1){
		  	    
		    	while($row=mysqli_fetch_assoc($result2)){
			   
			   ?>

						<tr>
							<td class="cart_product">
								<img src ="img/<?php echo $row['image']?>">
							</td>
							<td class="cart_description">
								<h4><?php echo $row['Pname']?></h4>
							</td>
                            <td class="cart_description">$ <?php echo $row['Pprice']?></td>
                            <td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="cart.php?add= <?php echo $row['Pid']; ?>"> + </a>
									<p><?php echo $row['quantity']?></p>
									<a class="cart_quantity_down" href="cart.php?remove= <?php echo $row['Pid']; ?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo $row['total']?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="cart.php?delete= <?php echo $row['Pid']; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
			   <?php
			   
		    	} 
		}
		
?>

					</tbody>
				</table>
							<form method="POST" action="cart_confirm.php">
                            <button type="submit" name="checkout" class="btn btn-fefault cart">Checkout</button>
                            </form>
			</div>
		</div>
	</section> <!--/#cart_items-->

	

 
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
		