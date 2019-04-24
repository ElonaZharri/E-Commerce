<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>1ST LOOK SING IN</title>
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

<header><h2 class="title text-center"><br>Welcome to 1st Look</h2></header>
  <body>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form class="form-signin" action="server.php" method="post">
						 <label for="inputusername" class="sr-only">Username</label>
                         <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
                         <label for="inputPassword"  class="sr-only">Password</label>
                         <input type="password" name="password" class="form-control" placeholder="Password" required>
                         
                         <p>Please select menu.</p>
                            <select id="userid" name="users">
                            <option value="C">Customer</option>
                            <option value="E">Employee</option>
                            <option value="M">Manager</option>
                            <option value="A">Admin</option>
                            </select>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type=submit value="SUBMIT" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form class="form-register"  action="registerserver.php" method="post">
						    
						 <label for="fname" class="sr-only">First Name</label>     
                         <input type="text" id="username" class="form-control" placeholder="First Name" name="fname" required autofocus>
        <br>
        
                        <label for="lname" class="sr-only">Last Name</label>     
                        <input type="text" id="username" class="form-control" placeholder="Last Name" name="lname" required autofocus>
        <br>
        
                        <label for="uname" class="sr-only">User Name</label>     
                        <input type="text" id="username" class="form-control" placeholder="User Name" name="username" required autofocus>
        
        <br>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        
        <br>
                        <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
                        <input type="password" id="confirmInputPassword" class="form-control" placeholder="Confirm Password" name="confirmPassword" required>
        
        <br>
        
                        <label for="street" class="sr-only">Street</label>
                        <input type="text" id="street" class="form-control" placeholder="Street" name="street" required>
        
        <br>
        
                        <label for="city" class="sr-only">City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" name="city" required>
        
        <br>
        
                        <label for="state" class="sr-only">State</label>
                        <input type="text" id="state" class="form-control" placeholder="State" name="state" required>
        
        <br>
        
                        <label for="zip" class="sr-only">Zip</label>
                        <input type="integer" id="zip" class="form-control" placeholder="Zip" name="zip" required>
        
        <br>
                        <label for="phone" class="sr-only">Phone</label>     
                        <input type="text" id="phone" class="form-control" placeholder="Phone" name="phone" required autofocus>
        <br>
                        <label for="inputEmail" class="sr-only">Email address</label>     
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                        
							<button name="submit" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>


	<br>
	
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