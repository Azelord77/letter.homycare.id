<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		tr:nth-child(even) {
  background-color: #f2f2f2;
}
	.pagination {
		background-color: transparent;
		display: inline-block;
		}
	.navbar-custom{
		background-color : #ed7aad;
	}
/* #116ad6
		#00adff
		#fe5ea6
		#ed7aad*/
		.pagination a {
		color: black;
		float: center;
		padding: 0px 10px;
		text-decoration: none;
		border-radius: 5px;
		}
		.pagination a:hover:not(.active) {background-color: #72bfd6;}</style>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Homycare Letter</title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- JQVMap -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
 <!-- Left navbar links -->
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" data-widget="pushmenu" href="#" role="button">
 <i class="fas fa-bars"></i></a>
 </li>
 </ul>
 <!-- user header Dropdown Menu -->
 <ul class="navbar-nav ml-auto">
 <li class="nav-item dropdown user-menu">
 <a class="nav-link" data-toggle="dropdown" href="#">
	Selamat datang <b><?php echo $this->session->userdata('name') ?></b>,
	Anda login sebagai : <b><?php echo $this->session->userdata('role') ?></b>,
	Dengan Hak Akses : <b><?php echo $this->session->userdata('akses') ?></b>
	&nbsp;&nbsp;<img src="<?php echo base_url();?>img/logogaming.png" class="user-image" alt="User Image">
</a>

 </li>
 </ul>
 </nav>
 <!-- /.navbar -->
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
 <!-- Brand Logo -->
 <a href="#" class="brand-link">
 <img src="<?php echo base_url();?>img/logogaming.png"alt="Homycare Letter" class="brand-image img-circle elevation-3" style="opacity: .8">
 <span class="brand-text font-weight-light">Homycare Letter</span>
 </a>
 <!-- Sidebar -->
 <div class="sidebar">
 <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
 <div class="image">
 <img src="<?php echo base_url();?>img/razer.png" class="user-image" alt="User Image">
 </div>
 <div class="info">
 <?php
 $id_user = $this->session->userdata('id_user');
 $user = $this->db->query("select * from user where id_user='$id_user'")->row();
 ?>
 <a href="#" class="d-block"><?php echo $this->session->userdata('name') ?></a>
 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
 </div>
 </div>
 <!-- Sidebar Menu -->
 <nav class="mt-2">
 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
 <!-- Menu Dashboard -->
 <li class="nav-item">
 <a href="<?php echo base_url().'letters' ?>" class="nav-link">
 <i class="nav-icon fas fa-home"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home
 </a>
 </li>
 <!-- Menu Artikel -->


 <!-- Menu Profil -->
 <li class="nav-item">
 <a href="<?php echo site_url('user/index'); ?>" class="nav-link">
 <i class="nav-icon fas fa-user"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User
 </a>
 </li>
 
 <!-- Menu Pengguna -->
 <li class="nav-item">
 <a href="<?php echo site_url('operator/index'); ?>" class="nav-link">
 <i class="nav-icon fas fa-users"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Operator
 </a>
 </li>



 <!-- Menu penggaturan website -->
 
 
 <li class="nav-item">
 <a href="<?php echo site_url('letters/review_letters/'); ?>"target="_blank" class="nav-link">
 <i class="nav-icon fas fa-print"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print Letter
 </a>
 </li>
 <!-- Menu ganti password -->
<!-- Menu keluar -->
 <li class="nav-item">
 <a href="<?php echo base_url().'login/keluar' ?>" class="nav-link">
 <i class="nav-icon fas fa-share"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KELUAR
 </a>



</ul>
</nav>
</div><!-- /.sidebar-menu -->
</aside><!-- /.sidebar -->
