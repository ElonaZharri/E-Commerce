<?php
	session_start();
	include 'connection.php';
	$link = connect();
	$sql = "SELECT * FROM orders";
	$result= mysqli_query($link,$sql);
			if(mysqli_num_rows($result) > 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
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
<script>
 function UpdateTable()
{
 document.getElementById("update").style.display="none";
 
	
 var oid_new=document.getElementById("new_oid").value;
 //oid_new=document.write(oid_new);
 var pid_new=document.getElementById("new_pid").value;
 var cid_new=document.getElementById("new_cid").value;
 var quantity_new=document.getElementById("new_quantity").value;

document.cookie = "oid_n = " + oid_new;
document.cookie = "pid_n = " + pid_new;
document.cookie = "cid_n = " +  cid_new;
document.cookie = "quantity_n = " + quantity_new;

	

//alert(oid);
}
    </script>
    <body>
        
        <form id="my_form" method="POST">
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
                                <li><a href="admin_products.php?admin_products">Manage Products</a></li>
								<li><a href="admin_orders.php?admin_orders"  class="active" >Manage Orders</a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
					
			</div>
		</div><!--/header-top-->
	
	</header><!--/header-->
        
        <h2 class="title text-center"><br>[ADMIN] Manage Orders</h2>
        
        
        <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
						<th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Total Price</th>
                        <th>Quantity</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Update</th>
                        <th>Delete</th>
						</tr>
					</thead>

              
<?php

			  while($row=mysqli_fetch_assoc($result)){
			   $Oid = $row['Oid'];
			   $_SESSION['Oid']=$Oid;
			   $Cid = $row['Cid'];
			   $_SESSION['Cid']=$Cid;
			   $Pid = $row['Pid'];
			   $_SESSION['Pid']=$Pid;
			   $Pname = $row['Pname'];
			   $price = $row['price'];
			   $quantity = $row['quantity'];
			   $adress = $row['adress'];
			   $city = $row['city'];
			   $state = $row['state'];
			   $zip = $row['zip'];
			   $originalquantity = $quantity + 1;
	
			   
			   
			   
///////////////////////////Edit/////////////////////////
	if(isset($_POST['update_quantity'])){
	 $newvalue = $_POST['new_quantity']; 
	$new_quantity = $_POST['new_quantity'];

	$sql3 = "SELECT Oid, Cid, Pid, Pname, quantity, price, adress, city, state, zip FROM orders WHERE Oid='$x'";
	$result3= mysqli_query($link,$sql3);  
	
	$update_quantity = "UPDATE orders SET quantity='$new_quantity'  WHERE Pid='$Pid' AND Cid='$Cid'";
	$run_update = mysqli_query($link, $update_quantity); 

	echo "<script>alert('Quantity has been updated!' $update_quantity)</script>";

	}
	
	///////////////////////////Abidha/////////////////////////





	if(isset($_POST['update_quantity_abidha'])){
	  
	 
		    	$new_quantity = $_COOKIE['quantity_n'];
		    $new_Oid =  $_COOKIE['oid_n'];
		 
		    	$new_Pid = $_COOKIE['pid_n'];
		    	$new_Cid = $_COOKIE['cid_n'];

		      $sql_new = "SELECT Oid, Cid, Pid, Pname, quantity, price, adress, city, state, zip FROM orders WHERE Oid='$new_Oid' and Pid='$new_Pid' and Cid='$new_Cid'";
		      	$result3= mysqli_query($link,$sql_new);  
		      	 if(mysqli_num_rows($result3)){
		    	$update_quantity = "UPDATE orders SET quantity='$new_quantity'  WHERE Pid='$new_Pid' AND Cid='$new_Cid' AND Oid=$new_Oid";
	           $run_update = mysqli_query($link, $update_quantity); 
	           
	     }
	     ///////////////////////////Edit End ABIDHA/////////////////////////
		}
		//////////////End Edit////////

		///////////////////////////DELETE/////////////////////////
		if(isset($_GET['delete'])){
	      $x=((int)$_GET['delete']);
	     $sql3 = "SELECT Oid, Cid, Pid, Pname, quantity, price, adress, city, state, zip FROM orders WHERE Oid='$x'";
	     $result3= mysqli_query($link,$sql3);  
	     
	               $sql5 = " DELETE FROM orders WHERE Oid='$x'";
	               $result5= mysqli_query($link,$sql5);
	               
   	               $sql6 = " UPDATE products SET quantity='$originalquantity' WHERE Pid='$Pid'";
	               $result6= mysqli_query($link,$sql6);
	     }

		//////////////End DELETE////////
  
?>

               <tr>
            <td><input type="text" name ="new_oid" id= "new_oid" value="<?php echo $Oid?>" readonly></input></td>
               <td><input type="text" name ="new_cid" id= "new_cid" value="<?php echo $Cid?>" readonly></input></td>
               <td><input type="text" name ="new_pid" id= "new_pid" value="<?php echo $Pid?>" readonly></input></td>
                <td><?php echo $Pname?></td>
                <td>$<?php echo $price?></td>
                <td><input type="text" name ="new_quantity" id= "new_quantity" value="<?php echo $quantity?>"></input></td>
                <td><?php echo $adress?></td>
                <td><?php echo $city?></td>
               <td><?php echo $state?></td>
                <td><?php echo $zip?></td>
                <td><input type="submit" name="update_quantity_abidha" formaction="/~kimd35/1st_look/edit.php"  value="Update" id="update" onclick="UpdateTable();"/></td>
                <div id="msg"></div>
                <td><a class="cart_quantity_delete" href="admin_orders.php">Delete</a></td>
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
    <script src="js/main.js?v=12392823"></script>
    </form>
    </body>
</html>

<?php

		} else{
				echo "Can't find another products. Try later.";
				}
		$link->close();   
		
?>

