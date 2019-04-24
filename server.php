<?php
	session_start();
	include 'connection.php';
	$link = connect();
	
	//collect from form
	if(isset($_POST['submit'])){
		$username= $_POST['username'];
		$password= $_POST['password'];
		$spw= md5($password);
		$option= $_POST['users'];

    	///////////////////////////	
		if($option == 'C'){
		 	$sql= "SELECT * FROM users WHERE username='$username' AND password='$spw' AND positionID='C'";
			$result= mysqli_query($link,$sql);
			
			if(mysqli_num_rows($result) == 1){
			  while($row=mysqli_fetch_assoc($result)){
			   $id = $row['id'];
			   $_SESSION['id']=$id;
			   $firstname = $row['firstname'];
			   $_SESSION['firstname']=$firstname;
			   

			  }
            header('location: home1.php');
		} else{
				echo "Wrong Username or Password";
				}
		$link->close();   
		}
		
	///////////////////////////	
	if($option == 'E'){
	    	$sql= "SELECT * FROM users WHERE username='$username' AND password='$spw' AND positionID='E'";
			$result= mysqli_query($link,$sql);
			
			if(mysqli_num_rows($result) == 1){
    			    while($row=mysqli_fetch_assoc($result)){
        			   $id = $row['id'];
        			   $_SESSION['id']=$id;
        			   $firstname = $row['firstname'];
			           $_SESSION['firstname']=$firstname;
        			   
			        }
	 
		            header('location: employee.php');

	}else{
		echo "Wrong Username or Password";
	}
	$link->close();   
	}
	
	  ///////////////////////////	
	if($option == 'M'){
	    	$sql= "SELECT * FROM users WHERE username='$username' AND password='$spw' AND positionID='M'";
			$result= mysqli_query($link,$sql);
			
			if(mysqli_num_rows($result) == 1){
			  while($row=mysqli_fetch_assoc($result)){
			   $id = $row['id'];
			   $_SESSION['id']=$id;
			   $firstname = $row['firstname'];
			   $_SESSION['firstname']=$firstname;
			   
			  }
            header('location: manager.php');

		} else{
				echo "Wrong Username or Password";
				}
		$link->close();   
		
	}  
	
		///////////////////////////	
	if($option == 'A'){
	    	$sql= "SELECT * FROM users WHERE username='$username' AND password='$spw' AND positionID='A'";
			$result= mysqli_query($link,$sql);
			
			if(mysqli_num_rows($result) == 1){
			  while($row=mysqli_fetch_assoc($result)){
			   $id = $row['id'];
			   $_SESSION['id']=$id;
			   $firstname = $row['firstname'];
			   $_SESSION['firstname']=$firstname;
			   
			  }
            header('location: admin.php');

		} else{
				echo "Wrong Username or Password";
				}
		$link->close();   
		
	}
		
}

?>
