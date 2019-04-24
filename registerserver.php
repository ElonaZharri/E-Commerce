<?php
	session_start();
	include 'connection.php';
	$link = connect();
  
	if(isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['confirmPassword'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pid = 'C';
		
		if($password != $cpassword){
		    echo "Password don't match.";
		}
		else{

			$sql2= "SELECT username FROM users WHERE username='$username'";
			$result1= mysqli_query($link,$sql2);
			
			  if(mysqli_num_rows($result1)  >= 1){
			  echo "User or email already exist";
			  }
			  else{
			      
			      $spw= md5($password);
			      
			      
			      
		//Insert new user
		$sql="INSERT INTO users (positionID, firstname, lastname, username, password, street, city, state, zip, email, phone)
		VALUES('$pid', '$fname', '$lname', '$username', '$spw', '$street', '$city', '$state', '$zip','$email','$phone')";
		
		$result= mysqli_query($link,$sql);
		
		echo "Thank you for signing up";
			  } 
			  }
		?>
		
		<a href = 'index.php'>Log In</a>
		<?php
		
}
        
	
?>
