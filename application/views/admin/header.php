<!doctype html>
<html>
<head>
<title>Dasboard - Aplikasi Perpustakaan</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css'?>">
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url(),'assets/datatable/datatables.js'?>"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-togglecollapsed" data-toggle="collapse" data-target="#bs-example-navbarcollapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">Moy Perpustakaan</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url().'admin'; ?>"><span class="glyphicon glyphiconhome"></span>Dashboard<span class="sronly">(current)</span></a></li>
					<li><a href="<?php echo base_url().'admin/buku'; ?>"><span class="glyphicon glyphiconfolder-open"></span>Data Buku</a></li>
					<li><a href="<?php echo base_url().'admin/anggota'; ?>"><span class="glyphicon glyphiconuser"></span>Data Anggota</a></li>
					<li><a href="<?php echo base_url().'admin/peminjaman'; ?>"><span class="glyphicon glyphiconsort"></span>Transaksi Peminjaman</a></li>
					<li><a href="<?php echo base_url().'admin/laporan'; ?>"><span class="glyphicon glyphicon-list-alt"></span>Laporan</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url().'admin/logout'; ?>"><span class="glyphicon glyphicon-logout"></span>Logout</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" datatoggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Hallo, <b>".$this->session->userdata('nama');?></b></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url().'admin/ganti_password'; ?>"><i class="glyphicon glyphiconlock"></i>Ganti Password</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
</nav>
<div class="container">