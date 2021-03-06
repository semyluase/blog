<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>My Site - Dashboard Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url();?>assets/img/sidebar-1.jpg">
			<div class="logo">
				<a href="#" class="simple-text logo-normal">Palau Blaugrana</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item active  ">
						<a class="nav-link" href="#">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<i class="material-icons">content_paste</i>
							<p>Prestasi</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url();?>admin/karya">
							<i class="material-icons">content_paste</i>
							<p>Karya Ilmiah</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<i class="material-icons">content_paste</i>
							<p>Tulisan</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<i class="material-icons">content_paste</i>
							<p>Contact</p>
						</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="#">
							<i class="material-icons">person</i>
							<p>User Profile</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="javascript:;">Dashboard</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">notifications</i>
									<span class="notification">0</span>
									<p class="d-lg-none d-md-block">
										Some Actions
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">No Notification</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">person</i>
									<p class="d-lg-none d-md-block">
										Account
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
									<a class="dropdown-item" href="#"><?php echo $logged_in['fullname'];?></a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url();?>login/logout">Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="content">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-info card-header-icon">
									<div class="card-icon">
										<i class="material-icons">content_paste</i>
									</div>
									<p class="card-category">Karya Ilmiah</p>
									<h3 class="card-title"><?php echo $totalkarya;?>
										<small>data</small>
									</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-info">info</i>
										<a href="javascript:;">Lihat Karya Ilmiah</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-info card-header-icon">
									<div class="card-icon">
										<i class="material-icons">content_paste</i>
									</div>
									<p class="card-category">Master Enumeration</p>
									<h3 class="card-title"><?php echo $totalenum;?>
										<small>data</small>
									</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-info">info</i>
										<a href="javascript:;">Lihat Master Enum</a>
									</div>
								</div>
							</div>
						</div>
        			</div>
        		</div>
        	</div>
<?php include('inc/footer.php');?>