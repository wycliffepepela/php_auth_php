<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="vendor/css/coming-soon.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
	<div class="masthead-bg"></div> 
	<div class="container ">
		<div class="row h-100">
			<div class="card card-register mx-auto mt-5">
				<div class="card-header text-center">Register an Account</div>
				<div class="card-body">
					<form action="require.php" method="post">
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12 my-auto">
									<label for="usn">UserName</label>
									<input class="form-control" id="usn" name="name" type="text" aria-describedby="nameHelp" placeholder="Enter Username" required="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12 my-auto">
								<label for="pwd">Password</label>
								<input class="form-control" id="pwd" type="password" name="pass" placeholder="Enter Password" required="">
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12 my-auto">
									<label for="phn">PhoneNo</label>
									<input class="form-control" id="phn" type="number" name="contact" placeholder="Enter your PhoneNo" required="">
								</div>
							</div>
						</div>
						<input type="submit" name="Register" class="btn btn-secondary btn-lg btn-block" value="Register">
					</form>
					 <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot_password.php">Forgot Password?</a>
        </div>
				</div>
			</div>
		</div>
	</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/vide/jquery.vide.min.js"></script>
<script src="vendor/js/coming-soon.js"></script>
<script src="vendor/js/coming-soon.min.js"></script>


</body>
</html>