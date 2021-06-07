<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="../admin/image/z.png">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<header align="center"><img src="../Admin/image/zeel.png" alt="logo"></header>
			<div class="card-header">
				<h3>Registration</h3>
			</div>
			<div class="card-body">
				<form action="registrationcode.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						    <input type="email" class="form-control email" name="email" placeholder="E-Mail">
						    <span class="input-group-btn"></span>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" name="pass" id="password" class="form-control" placeholder="Password" data-toggle="password">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-eye"></i>
							</span>
						</div>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" name="conpass" id="password" class="form-control" placeholder="Confirm Password" data-toggle="password">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-eye"></i>
							</span>
						</div>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">  Accept the Terms & Policies...
					</div>
					<div class="form-group">
						<input type="submit" value="Sign Up" name="submit" class="btn float-right login_btn">
					</div>
					<div class="d-flex justify-content-center links">
					Already have an account?
				</div>
				</form>
			</div>
			<!-- <div class="card-footer">
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div> -->
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<script  src="assets/js/bootstrap-show-password.js"></script>
</body>
</html>
