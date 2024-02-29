<?php include 'headerhome.php'; ?>


<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">

		<style type="text/css">
			
			@media (max-width: 480px) { 
				.col-xs-6.custom-width{
					/*background: blue !important;*/
					max-width:50% !important;
				}

				.col-xs-6.custom-width img{
					height: 150px !important;
				}

			} 
			.about,
.service {
	padding-bottom: 100px;
}
.about p {
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: center;
}
.about ul{
	color: #666;
	word-spacing: 2px;
	line-height: 25px;
	margin-bottom: 20px;
	text-align: left;
}
.service {
	padding: 40px 0;
	text-align: center;
  }
  
  .service h3 {
	font-size: 28px;
	font-weight: 600px;
	color: #333;
	margin-bottom: 30px;
  }
  
  .service .box {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	margin-top: 30px;
  }
  
  .service .box .col-4 {
	flex-basis: 25%;
	margin: 0 15px;
	margin-bottom: 30px;
  }
  
  .service .card {
	padding: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	text-align: center;
  }
  
  .service .card .icon {
	font-size: 40px;
	color: #333;
  }
  
  .service .card-content h4 {
	font-size: 22px;
	font-weight: 600;
	color: #333;
	margin-top: 15px;
  }
  
  .service .card-content p {
	font-size: 14px;
	color: #666;
	margin-top: 20px;
  }
			
		</style>

		
		<!-- row -->
		<div class="row">
			
			<?php 
			// include 'sidebar.php'; 
			?>

			<!-- MAIN -->
			<div id="main" class="col-md-12">

				<?php 
				if(isset($_GET['cari'])){
					?>
					Hasil Pencarian : <?php echo htmlspecialchars($_GET['cari']); ?>
					<?php
				}
				?>

				<!-- store top filter -->
				<form action="" method="get">
					<?php 
					if(isset($_GET['cari'])){
						$c = "&cari=".$_GET['cari'];
						?>
						<input type="hidden" name="cari" value="<?php echo $_GET['cari']; ?>">
						<?php
					}else{
						?>
						
						<?php
					}
					?>


<section class="about">
		<div class="container" style="text-align: center;">
			<h3>Plafond</h3>
			<p> Pemasangan plafond adalah proses memasang material penutup di bagian atap ruangan yang bertujuan untuk meningkatkan keindahan, meredam suara, dan menyembunyikan struktur atap. Plafond dapat terbuat dari berbagai bahan, seperti gypsum, kayu, logam, atau bahan komposit lainnya. Proses pemasangan plafond melibatkan pengukuran, pemotongan, dan pemasangan panel-panel plafond ke rangka atau struktur atap yang sudah disiapkan. Selain fungsi estetika, plafond juga dapat memperbaiki akustik ruangan dengan menggunakan material peredam suara.</p>
			<h3>Partisi</h3>
			<p>Pemasangan partisi adalah proses memisahkan atau membagi ruangan menjadi beberapa bagian dengan menggunakan dinding pembatas. Partisi dapat terbuat dari berbagai bahan, seperti kayu, gypsum, beton, atau bahan komposit lainnya. Tujuan pemasangan partisi adalah untuk menciptakan ruang-ruang terpisah yang dapat digunakan untuk berbagai keperluan, seperti pembagian ruang kerja di kantor, pembuatan ruang tidur tambahan di rumah, atau pembuatan ruangan khusus di gedung-gedung komersial. Proses pemasangan partisi melibatkan pengukuran, pemotongan, dan pemasangan panel-panel partisi ke lantai dan langit-langit, serta pemasangan pintu jika diperlukan.
			</p>
			<h3>Renovasi Rumah dan Ruko</h3>
			<p>Renovasi rumah dan ruko adalah proses perbaikan, perubahan, atau pembaruan yang dilakukan pada bangunan yang sudah ada. Renovasi dapat meliputi berbagai aspek, seperti peningkatan tampilan eksterior bangunan, perbaikan struktur dan keamanan, perubahan tata letak ruangan, pembaruan sistem listrik dan sanitasi, atau pembaruan material dan furnitur. Renovasi rumah dan ruko dapat dilakukan untuk memperbaharui atau meningkatkan nilai, fungsi, dan kenyamanan bangunan tersebut. Proses renovasi melibatkan perencanaan yang matang, pemilihan material yang tepat, pemotongan dan pemasangan yang cermat, serta penyelesaian dengan standar kualitas yang tinggi.
			</p>
			<h3>Profil</h3>
			<p>pemasangan gypsum di dinding interior untuk menciptakan tampilan yang unik dan menarik. Gypsum adalah material yang serbaguna dan umum digunakan dalam industri konstruksi. Pemasangan gypsum dalam profil dapat memberikan kelembutan dan keindahan pada ruangan Anda.
			</p>
			</div>
	</section>
			</div>
			<!-- /MAIN -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<?php include 'footer.php'; ?>