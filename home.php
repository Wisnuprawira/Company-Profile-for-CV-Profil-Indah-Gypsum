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



<div class="w3-content w3-section" style="max-width:500px " >
  <img class="mySlides" src="frontend/img/gambar1.jpeg" style="width: 1100px; height : 800px">
  <img class="mySlides" src="frontend/img/gambar2.jpeg" style="width: 1100px; height : 800px">
  <img class="mySlides" src="frontend/img/gambar3.jpeg" style="width: 1100px; height : 800px">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>

		
		

	<!-- about -->
	<section class="about" style="text-align: center; padding-top :10%;">
			<h2>ABOUT</h2>
			<p> Kami adalah perusahaan jasa yang bergerak dibidang pemasangan gypsum,partisi, 
				renovasi rumah/gedung dan pembangunan rumah. Jasa pemasangan gypsum, partisi, renovasi rumah/gedung, 
				dan pembangunan rumah adalah layanan yang ditawarkan untuk meningkatkan tampilan dan kenyamanan hunian atau gedung Anda. Jasa pemasangan gypsum 
				meliputi instalasi plafon dan dinding yang terbuat dari bahan gypsum, yang memberikan kelembutan dan keindahan tampilan pada ruangan Anda. 
				Dalam pemasangan gypsum, tenaga ahli akan memastikan bahwa bahan yang digunakan berkualitas tinggi dan dipasang dengan presisi sehingga memberikan hasil yang tahan lama. Partisi juga merupakan bagian penting dalam pembangunan atau renovasi rumah atau gedung. Partisi memungkinkan pemisahan ruangan yang tepat sesuai dengan kebutuhan Anda. Tenaga ahli kami akan memastikan partisi dipasang dengan baik dan kuat sehingga tidak mudah rusak dan memberikan kenyamanan bagi penghuninya. Renovasi rumah atau gedung merupakan layanan untuk memperbaiki, memodernisasi, atau memperindah hunian atau gedung Anda. Dalam renovasi, kami akan membantu Anda dalam perencanaan desain, pemilihan material, dan pelaksanaan pekerjaan secara efisien dan efektif, sehingga dapat menghasilkan hasil yang maksimal sesuai dengan keinginan Anda. Pembangunan rumah adalah layanan untuk membangun rumah baru sesuai dengan keinginan dan kebutuhan Anda. Dalam pembangunan, kami akan membantu Anda dalam perencanaan desain, pemilihan material, dan pelaksanaan pekerjaan secara cermat dan terkoordinasi, sehingga dapat menghasilkan rumah yang berkualitas dan sesuai dengan anggaran yang telah ditetapkan. Kami memiliki tim tenaga ahli yang berpengalaman dan terlatih untuk memberikan layanan terbaik untuk kebutuhan pemasangan gypsum, partisi, renovasi rumah/gedung, dan pembangunan rumah. Kami berkomitmen untuk memberikan hasil yang berkualitas dan memberikan kepuasan pelanggan yang tinggi.</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="card" style="width: 25rem;">
						<img src="frontend/img/gambar1.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
						<div class="card-body">
						  <h2 class="card-title"><a href="service.php" class="btn btn-primary">Plafond</a>
							</h2>
						</div>
					  </div>
				</div>
				<div class="col-4">
					<div class="card" style="width: 25rem;">
						<img src="frontend/img/gambar2.jpeg" width="200px" height="200px" class="card-img-top" alt="...">
						<div class="card-body">
						  <h2 class="card-title"><a href="service.php" class="btn btn-primary">Partisi</a>
							</h2>
						</div>
					  </div>
				</div>
				<div class="col-4">
					<div class="card" style="width: 25rem;">
						<img src="frontend/img/renovasi.jpg" width="200px" height="200px" class="card-img-top" alt="...">
						<div class="card-body">
						  <h2 class="card-title"><a href="service.php" class="btn btn-primary">Renovasi Rumah dan Ruko</a>
							</h2>
						</div>
					  </div>
				</div>
				<div class="col-4">
					<div class="card" style="width: 25rem;">
						<img src="frontend/img/profil.jpg" width="200px" height="200px" class="card-img-top" alt="...">
						<div class="card-body">
						  <h2 class="card-title"><a href="service.php" class="btn btn-primary">Profil</a>
							</h2>
						</div>
					  </div>
				</div>
			</div>
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