<?php
	session_start();
	include 'connection.php';
	$link = connect();
	$sql = "SELECT * FROM products";
	$result= mysqli_query($link,$sql);
			if(mysqli_num_rows($result) > 0){
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
								<li><a href="admin.php">Home</a></li>
								<li><a href="admin_users.php?admin_users">Manage Users</a></li>
                                <li><a href="admin_products.php?admin_products" class="active">Manage Products</a></li>
								<li><a href="admin_orders.php?admin_orders">Manage Orders</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a>
								</li>
							</ul>
						</div>
					</div>
					 <div>
                     <form method="get" action="results_products.php" enctype="multipart/form-data">
                    <input type="text" name="user_query" placeholder="Search a Product"/ > 
                    <input type="submit" name="search" value="Search" />
                </form>
				</div>
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
	
	<h2 class="title text-center"><br>[ADMIN] Manage Products</h2>
	
                <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <th>Product ID</th>
                         <th>Name</th> 
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
              
<?php

			  while($row=mysqli_fetch_assoc($result)){
			   $Pid = $row['Pid'];
			   $_SESSION['Pid']=$Pid;
			   $Pname = $row['Pname'];
			   $Pprice = $row['Pprice'];
			   $quantity = $row['quantity'];
			   $category = $row['category'];
			   
			   
			   
///////////////////////////Edit/////////////////////////
		if(isset($_GET['edit'])){
	      $x=((int)$_GET['edit']);
	     $sql3 = "SELECT  Pid, Pname, Pprice, quantity, image, category FROM products WHERE Pid='$x'";
	     $result3= mysqli_query($link,$sql3);  
	     
	     }

		//////////////End Edit////////
		
		///////////////////////////DELETE/////////////////////////
		if(isset($_GET['delete'])){
	     $x=((int)$_GET['delete']);
	     $sql3 = "SELECT  Pid, Pname, Pprice, quantity, image, category FROM products WHERE Pid='$x'";
	     $result3= mysqli_query($link,$sql3);  
	     
	               $sql5 = " DELETE FROM products WHERE Pid='$x'";
	               $result5= mysqli_query($link,$sql5);


	     }
	      

		//////////////End DELETE////////

?>

              <tr>
                <td><?php echo $Pid?></td>
                <td><?php echo $Pname?></td>
                <td><?php echo $Pprice?></td>
                <td><?php echo $quantity?></td>
                <td><?php echo $category?></td>
                <td><a class="cart_quantity_edit" href="edit_products.php">Edit</a></td>
                <td><a class="cart_quantity_delete" href="admin_products.php?delete= <?php echo $row['Pid']; ?>">Delete</a></td>
              </tr>
              
           <?php
			  
			  }
           ?>
     
        </table>
        
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

<?php

		} else{
				echo "Can't find another products. Try later.";
				}
		$link->close();   
		
?>

