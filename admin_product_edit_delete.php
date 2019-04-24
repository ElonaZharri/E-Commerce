<?php
	session_start();
	include 'connection.php';
	$link = connect();
	$sql = "SELECT * FROM orders";
	$result= mysqli_query($link,$sql);
			if(mysqli_num_rows($result) > 0){
?>

<html>
    <head>
        <tr align="center">
		    <td colspan="6"><h2>[Admin] View All Orders</h2></td>
	    </tr>
    </head>
    <body>
        <table border=1 >
              <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Customer ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Total Price</th>
                <th>Quantity</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Shipping Price</th>
                <th>Tax</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              
<?php

			  while($row=mysqli_fetch_assoc($result)){
			   $Oid = $row['Oid'];
			   $_SESSION['Oid']=$Oid;
			   $Odatae = $row['Odate'];
			   $Cid = $row['Cid'];
			   $_SESSION['Cid']=$Cid;
			   $Pid = $row['Pid'];
			   $_SESSION['Pid']=$Pid;
			   $Pname = $row['Pname'];
			   $Totalprice = $row['Totalprice'];
			   $quantity = $row['quantity'];
			   $address = $row['address'];
			   $city = $row['city'];
			   $state = $row['state'];
			   $zip = $row['zip'];
			   $Shippingprice = $row['Shippingprice'];
			   $tax = $row['tax'];
  
?>

              <tr>
                <td><?php echo $Oid?></td>
                <td><?php echo $Odatae?></td>
                <td><?php echo $Cid?></td>
                <td><?php echo $Pid?></td>
                <td><?php echo $Pname?></td>
                <td><?php echo $Totalprice?></td>
                <td><?php echo $quantity?></td>
                <td><?php echo $address?></td>
                <td><?php echo $city?></td>
                <td><?php echo $state?></td>
                <td><?php echo $zip?></td>
                <td><?php echo $Shippingprice?></td>
                <td><?php echo $tax?></td>
                <td><button>Edit</button></td>
                <td><button>Delete</button></td>
              </tr>
              
           <?php
			  
			  }
           ?>
     
        </table>
    </body>
</html>

<?php

		} else{
				echo "Can't find another products. Try later.";
				}
		$link->close();   
		
?>

