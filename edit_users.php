<?php
	session_start();
	include 'connection.php';
	$link = connect();
	$sql = "SELECT * FROM users";
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
<script>
 function UpdateTable()
{
 document.getElementById("update").style.display="none";
 var id_new=document.getElementById("new_id").value;
 var street_new=document.getElementById("new_street").value;
 //oid_new=document.write(oid_new);
 var city_new=document.getElementById("new_city").value;
 var state_new=document.getElementById("new_state").value;
 var zip_new=document.getElementById("new_zip").value;
 var phone_new=document.getElementById("new_phone").value;
 var email_new=document.getElementById("new_email").value;

document.cookie = "id_n = " + id_new;
document.cookie = "street_n = " + street_new;
document.cookie = "city_n = " + city_new;
document.cookie = "state_n = " +  state_new;
document.cookie = "zip_n = " + zip_new;
document.cookie = "phone_n = " +  phone_new;
document.cookie = "email_n = " + email_new;
	

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
								<li><a href="admin_users.php?admin_users" class="active">Manage Users</a></li>
                                <li><a href="admin_products.php?admin_products" >Manage Products</a></li>
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
        
        <h2 class="title text-center"><br>Manage Users</h2>
        <table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <th>Customer ID</th>
                        <th>First Name</th> 
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
<?php

			  while($row=mysqli_fetch_assoc($result)){
			   $id = $row['id'];
			   $_SESSION['id']=$id;
			   $firstname = $row['firstname'];
			   $lastname = $row['lastname'];
			   $username = $row['username'];
			   $street = $row['street'];
			   $city = $row['city'];
			   $state = $row['state'];
			   $zip = $row['zip'];
			   $phone = $row['phone'];
			   $email = $row['email'];

	
	///////////////////////////EDIT Abidha/////////////////////////

	if(isset($_POST['update_quantity_abidha'])){
                $new_id =  $_COOKIE['id_n'];
		        $new_street =  $_COOKIE['street_n'];
		        $new_city = $_COOKIE['city_n'];
		    	$new_state = $_COOKIE['state_n'];
		    	$new_zip = $_COOKIE['zip_n'];
		    	$new_phone = $_COOKIE['phone_n'];
		    	$new_email = $_COOKIE['email_n'];

		      $sql_new ="SELECT id, firstname, lastname, username, street, city, state, zip, phone, email FROM users WHERE  id='$new_id'";
		      	echo  $sql_new ;
		      	$result3= mysqli_query($link,$sql_new);  
		      	 if(mysqli_num_rows($result3)){
		    	$update_quantity = "UPDATE users SET street='$new_street', city='$new_city', state='$new_state', 
		    	zip='$new_zip', phone='$new_phone', email='$new_email' WHERE id='$new_id'";
	            $run_update = mysqli_query($link, $update_quantity); 
	           
	     }
	     ///////////////////////////Edit End ABIDHA/////////////////////////
		}
		//////////////End Edit////////
		
		///////////////////////////DELETE/////////////////////////
		if(isset($_GET['delete'])){
	     $x=((int)$_GET['delete']);
	     $sql3 = "SELECT  id, positionID, firstname, lastname, username, password, street, city, state, zip, phone, email FROM users WHERE id='$x'";
	     $result3= mysqli_query($link,$sql3);  
	     
	               $sql5 = " DELETE FROM users WHERE id='$x'";
	               $result5= mysqli_query($link,$sql5);

	     }
	      

		//////////////End DELETE////////
  
?>

              <tr>
                <td><input type="text" name ="new_id" id= "new_id" value="<?php echo $id?>" readonly></input></td>
                <td><?php echo $firstname?></td>
                <td><?php echo $lastname?></td>
                <td><?php echo $username?></td>
                <td><input type="text" name ="new_street" id= "new_street" value="<?php echo $street?>"></input></td>
                <td><input type="text" name ="new_city" id= "new_city" value="<?php echo $city?>"></input></td>
                <td><input type="text" name ="new_state" id= "new_state" value="<?php echo $state?>"></input></td>
                <td><input type="text" name ="new_zip" id= "new_zip" value="<?php echo $zip?>"></input></td>
                <td><input type="text" name ="new_phone" id= "new_phone" value="<?php echo $phone?>"></input></td>
                <td><input type="text" name ="new_email" id= "new_email" value="<?php echo $email?>"></input></td>
                <td><input type="submit" name="update_quantity_abidha" formaction="/~kimd35/1st_look/edit_users.php"  value="Update" id="update" onclick="UpdateTable();"/></td>
                <div id="msg"></div>
                <td><a class="cart_quantity_delete" href="admin_users.php?delete= <?php echo $row['id']; ?>">Delete</a></td>
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
    </form>
    </body>
</html>

<?php

		} else{
				echo "Can't find another products. Try later.";
				}
		$link->close();   
		
?>

