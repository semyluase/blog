<?php include('inc/header.php');?>

	<div class="wrapper">
		<div class="register-background"> 
		<div class="filter-black"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
						<div class="register-card">
							<h3 class="title">Welcome</h3>
							<form class="register-form" method="post" action="<?php echo base_URL(); ?>login/do_login">
								<label>Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password">
								<button class="btn btn-danger btn-block">Login</button>
							</form>
							<div class="forgot">
								<a href="#" class="btn btn-simple btn-danger">Forgot password?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include('inc/footer.php');?>
		</div>
	</div>

