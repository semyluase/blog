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
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>admin/dashboard">
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
					<li class="nav-item active">
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
						<a class="navbar-brand" href="javascript:;">Karya Ilmiah</a>
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
									<a class="dropdown-item" href="<?php echo base_url();?>/login/logout">Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="content">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-md-12">
        					<?php echo $this->session->flashdata("add_error"); ?>
        				</div>
        			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
               					<div class="card-header card-header-info">
									<div class="float-left"><h4 class="card-title ">Karya Ilmiah</h4></div>
									<button class="btn btn-danger btn-round float-right" data-toggle="modal" data-target="#tambahModal">
										<i class="material-icons">add</i> Tambah
									</button>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class=" text-info">
												<th>ID</th>
												<th>Judul</th>
												<th>Tahun Penulisan</th>
												<th>Jenis</th>
												<th>Action</th>
											</thead>
											<tbody>
												<?php if($karyailmiah->num_rows()==0){?>
													<tr>
														<td class="text-center" colspan="5">Tidak Ada Data</td>
													</tr>
												<?php } else {
													$no = 1;
													foreach($karyailmiah->result() as $row){?>
														<tr>
															<td><?php echo $no;?></td>
															<td><?php echo $row->judul;?></td>
															<td><?php echo $row->tahun;?></td>
															<td><?php echo $row->deskripsi;?></td>
															<td><button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#editModal<?php echo $row->id;?>"><i class="material-icons">edit</i></button> | <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#hapusModal<?php echo $row->id;?>"><i class="material-icons">delete</i></button></td>
														</tr>
												<?php $no++;}}?>
											</tbody>
										</table>
									</div>
									<div class="sep"></div>
									<div><ul class="pagination"><?php echo $pagi; ?></ul></div>
								</div>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        	<!--Modal-->
        	<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Karya Ilmiah</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="<?php echo base_url();?>admin/karya/add_new_successfully">
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="bmd-label-floating">Judul Karya Ilmiah</label>
												<input type="text" class="form-control" name="judul">
											</div>
											<div class="form-group">
												<label class="bmd-label-floating">Tahun Penulisan</label>
												<select class="form-control" name="tahun">
													<option>--Pilih Salah Satu--</option>
													<?php
														$year = 2010;
														$yearend = date('Y');
														for ($year; $year <= $yearend; $year++) {
															$selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
															echo "<option value=$year $selected>$year</option>";
														}
													?>
												</select>
											</div>
											<div class="form-group">
												<label class="bmd-label">Jenis Karya Ilmiah</label>
												<select class="form-control" name="jenis">
													<option>--Pilih Salah Satu--</option>
													<?php if($enum->num_rows() > 0){
														foreach ($enum->result() as $row) {?>
															<option value="<?php echo $row->id;?>"><?php echo $row->deskripsi;?></option>
													<?php }}?>
												</select>
											</div>
											<input type="hidden" name="admininput" value="<?php echo $logged_in['id'];?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-info">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php foreach($karyailmiah->result() as $row){
				$idjenis = $row->id_jenis;?>
			<div class="modal fade" id="editModal<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ubah Karya Ilmiah</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="<?php echo base_url();?>admin/karya/edit_new_successfully">
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-12">
											<input type="hidden" name="id" value="<?php echo $row->id;?>" />
											<div class="form-group">
												<label class="bmd-label-floating">Judul Karya Ilmiah</label>
												<input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>" />
											</div>
											<div class="form-group">
												<label class="bmd-label-floating">Tahun Penulisan</label>
												<select class="form-control" name="tahun">
													<option>--Pilih Salah Satu--</option>
													<?php
														$year = 2010;
														$yearend = date('Y');
														for ($year; $year <= $yearend; $year++) {
															$selected = ($row->tahun == $year) ? 'selected' : '';
															echo "<option value=$year $selected>$year</option>";
														}
													?>
												</select>
											</div>
											<div class="form-group">
												<label class="bmd-label">Jenis Karya Ilmiah</label>
												<select class="form-control" name="jenis">
													<option>--Pilih Salah Satu--</option>
													<?php if($enum->num_rows() > 0){
														foreach ($enum->result() as $baris) {?>
															<?php if($row->deskripsi == $baris->deskripsi){?>
																<option selected value="<?php echo $row->id;?>"><?php echo $row->deskripsi;?></option>
															<?php } else {?>
																<option value="<?php echo $baris->id;?>"><?php echo $baris->deskripsi;?></option>
													<?php }}}?>
												</select>
											</div>
											<input type="hidden" name="admininput" value="<?php echo $logged_in['id'];?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-info">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php }?>
			<?php foreach($karyailmiah->result() as $row){
				$idjenis = $row->id_jenis;?>
			<div class="modal fade" id="hapusModal<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Hapus Karya Ilmiah</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="<?php echo base_url();?>admin/karya/delete_new_successfully">
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-12">
											<p class="text-center">Anda yakin ingin menghapus</br>
												data dengan nama <?php echo $row->judul;?>?</p>
											<input type="hidden" name="id" value="<?php echo $row->id;?>" />
											<input type="hidden" name="admininput" value="<?php echo $logged_in['id'];?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Tidak</button>
								<button type="submit" class="btn btn-info float-right">Ya</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php }?>
<?php include('inc/footer.php');?>