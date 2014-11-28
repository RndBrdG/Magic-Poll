<?php
	session_start();
	if (isset($_SESSION['ID'])) header("Location: ./panel/dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MagicPoll - A bit of magic in your poll</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/main.css">
	</head>

	<body>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
		  	<div class="container">
		   		<ul class="nav navbar-nav">
		    		<li class="active"><a href=".">Home</a></li>
		    		<li><a href="#">Features</a></li>
		    		<li><a href="#">About us</a></li>
		    		<li><a href="#">Support</a></li>
		    	</ul>
				<p class="navbar-text navbar-right"><a href="#" class="navbar-link" id="login-link">Login</a> or <a href="#" class="navbar-link" id="register-link">Register</a></p>
		    </div>
		</nav>

		<div id="register-form" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
			<form class="form-horizontal" role="form" action="./panel/register.php" method="POST">
				<div class="form-group">
			    	<label class="sr-only col-sm-2 control-label" for="Username">Username</label>
			    	<input type="text" class="form-control" name="username" id="Username" placeholder="Username" required>
			  	</div>
			  	<div class="form-group">
			    	<label class="sr-only col-sm-2 control-label" for="Email">Email address</label>
			    	<input type="email" class="form-control" name="email" id="Email" placeholder="Email">
				</div>
				<div class="form-group">
				    <label class="sr-only col-sm-2 control-label" for="Password">Password</label>
				    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
				</div>
				<div class="col-md-4 center-block">
				  <button type="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>
		
		<div id="login-form" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
			<form class="form-horizontal" role="form" action="./panel/login.php" method="POST">
				<div class="form-group">
			    	<label class="sr-only col-sm-2 control-label" for="Username">Username</label>
			    	<input type="text" class="form-control" name="username" id="Username" placeholder="Username" required>
			  	</div>
				<div class="form-group">
				    <label class="sr-only col-sm-2 control-label" for="Password">Password</label>
				    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
				</div>
				<div class="col-md-4 center-block">
				  <button type="submit" class="btn btn-default">Submit</button>
				</div>
			</form>
		</div>

  		<!--  STARTING FOOTER -->

		<div class="container">
			<div class="footer">
				<p class="text-center">© MagicPoll 2014 <a href="www.fe.up.pt">MIEIC@FEUP</a></p>
		    </div>
		</div>

		<!-- BETTER PERFORMANCE -->
		<script src="./script/jquery-1.11.1.min.js"></script>
		<script src="./script/main.js"></script>
		<script src="./script/bootstrap.min.js"></script>
	</body>
</html>