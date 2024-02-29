<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>CV Profil Indah Gypsum</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="frontend/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="frontend/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="frontend/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="frontend/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="frontend/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="frontend/css/style.css" />
</head>

<?php
include 'koneksi.php';

session_start();

$file = basename($_SERVER['PHP_SELF']);

if(!isset($_SESSION['customer_status'])){

	// halaman yg dilindungi jika customer belum login
	$lindungi = array('customer.php','customer_logout.php');

	// periksa halaman, jika belum login ke halaman di atas, maka alihkan halaman
	if(in_array($file, $lindungi)){
		header("location:index.php");
	}

	if($file == "checkout.php"){
		header("location:masuk.php?alert=login-dulu");
	}

}else{

	// halaman yg tidak boleh diakses jika customer sudah login
	$lindungi = array('masuk.php','daftar.php');

	// periksa halaman, jika sudah dan mengakses halaman di atas, maka alihkan halaman
	if(in_array($file, $lindungi)){
		header("location:customer.php");
	}

}



if($file == "checkout.php"){


	if(!isset($_SESSION['keranjang']) || count($_SESSION['keranjang']) == 0){

		header("location:keranjang.php?alert=keranjang_kosong");

	}
}



?>
<body>

	<style>
		.product-name {
			height: 5px;
		}
	</style>
	<!-- HEADER -->
	<header>
		
		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="frontend/img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form action="index.php" method="get">
							<input class="input" type="text" name="cari" placeholder="Masukkan Pencarian ..">
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						

						<?php 
						if(isset($_SESSION['customer_status'])){
							$id_customer = $_SESSION['customer_id'];
							$customer = mysqli_query($koneksi,"select * from customer where customer_id='$id_customer'");
							$c = mysqli_fetch_assoc($customer);
							?>
							<!-- Account -->
							<li class="header-account dropdown default-dropdown" style="min-width: 200px">
								<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
									<div class="header-btns-icon">
										<i class="fa fa-user-o"></i>
									</div>
									<strong class="text-uppercase"><?php echo $c['customer_nama']; ?> <i class="fa fa-caret-down"></i></strong>
								</div>
								<span><?php echo $c['customer_email']; ?></span>
								<ul class="custom-menu">
									<li><a href="customer.php"><i class="fa fa-user-o"></i> Akun Saya</a></li>
									<li><a href="customer_pesanan.php"><i class="fa fa-list"></i> Pesanan Saya</a></li>
									<li><a href="customer_password.php"><i class="fa fa-lock"></i> Ganti Password</a></li>
									<li><a href="customer_logout.php"><i class="fa fa-sign-out"></i> Keluar</a></li>
								</ul>
							</li>
							<!-- /Account -->
							<?php
						}else{
							?>
							<li class="header-account dropdown default-dropdown">
								<a href="masuk.php" class="text-uppercase main-btn">Login</a> 
								<a href="daftar.php" class="text-uppercase primary-btn">Daftar</a> 
							</li>
							<?php
						}
						?>

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation" style="color: green;" >
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Kategori Produk <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<?php 
						$data = mysqli_query($koneksi,"SELECT * FROM kategori");
						while($d = mysqli_fetch_array($data)){
							?>
							<li><a href="produk_kategori.php?id=<?php echo $d['kategori_id']; ?>"><?php echo $d['kategori_nama']; ?></a></li>
							<?php 
						}
						?>
						<li style="background: #999;"><a href="index.php" style="color: white">Tampilkan Semua</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="home.php">Home</a></li>
						<li><a href="service.php">Service</a></li>
						<li><a href="index.php">Shop</a></li>
						<li><a href="login.php">Login Admin</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

















