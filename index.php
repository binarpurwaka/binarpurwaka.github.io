<?php
include_once "koneksi.php";
$db = new database();
$judul = $db->nama_web;
$images = $db->gambar_konten;
$footer = $db->footer;
$alamat_binar = $db->alamat_binar;
$nama_binar = $db->nama_binar;
$cekcari = "";
if(isset($_GET['keyword'])){
	$cekcari = $_GET['keyword'];
}
$cekkat = "";
if(isset($_GET['kat'])){
	$cekkat = $_GET['kat'];
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $judul; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo $images."viska.png"; ?>">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Tutup</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="<?php echo $images."viska.png"; ?>" alt="<?php echo $judul; ?>" class="img-responsive">
			</figure>
			<h3 class="heading">Tentang Halaman Ini</h3>
			<h2><?php echo $db->sidebar_judul; ?></h2>
			<p><?php echo $db->sidebar_isi; ?></p>
		</div>
		<div class="fh5co-menu">
		<?php 
			$cekJML = $db->cek_kategori("1");
			if($cekJML>1){
		?>
			<div class="fh5co-box">
				<h3 class="heading">Kategori</h3>
				<ul>
				<?php
						$data_kat = $db->kategori("1");
						foreach($data_kat as $kat){
							echo "<li><a href='?kat=$kat[idkategori]'>$kat[nama_kategori]</a></li>";
						}
					
				?>
				</ul>
			</div>
		<?php } ?>
			<div class="fh5co-box">
				<h3 class="heading">Pencarian</h3>
				<form action="?keyword=<?php echo $_POST['keyword']; ?>">
					<div class="form-group">
						<input type="text" name="keyword" class="form-control" placeholder="Ketik kata kunci" autocomplete="off">
					</div>
				</form>
			</div>
		</div>
		
	</div>
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<ul class="fh5co-social" style="margin:20px 0px 0px 0px;">
					<li><a href="<?php echo $db->alamat_twitter; ?>"><i class="icon-twitter"></i></a></li>
					<li><a href="<?php echo $db->alamat_facebook; ?>"><i class="icon-facebook"></i></a></li>
					<li><a href="<?php echo $db->alamat_instagram; ?>"><i class="icon-instagram"></i></a></li>
				</ul>
				<div class="col-lg-12 col-md-12 col-sm-10 col-xs-8 col-xxs-12 text-center">
					<h1 id="fh5co-logo" style="margin:20px 10px 0px 20px;"><a href="index.php"><?php echo $judul; ?></a></h1>
				</div>

			</div>
		
		</div>

	</header>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
		<?php
			if($cekcari==""){
				$jmlKonten = $db->cek_tampil_konten("ada");
			}else{
				$jmlKonten = $db->cek_tampil_konten($cekcari);
			}
			if($cekkat!=""){
				$jmlKonten = $db->cek_tampil_kat($cekkat);
			}
			if($jmlKonten!=0){
				if($cekcari==""){
					$dataKonten = $db->tampil_konten("ada");
				}else{
					$dataKonten = $db->tampil_konten($cekcari);
				}
				if($cekkat!=""){
					$dataKonten = $db->tampil_kat($cekkat);
				}
				
				$no=1;
				foreach($dataKonten as $konten){
					echo "<article class='col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box'>";
					echo "<figure>";
					echo "<a href='lihat.php?idkonten=$konten[idkonten]'><img src='images/$konten[gambar]' alt='Image' class='img-responsive'></a>";
					echo "</figure>";
					echo "<span class='fh5co-meta'><a href='lihat.php?idkonten=$konten[idkonten]'>$konten[nama_kategori]</a></span>";
					echo "<h2 class='fh5co-article-title'><a href='lihat.php?idkonten=$konten[idkonten]'>$konten[judul]</a></h2>";
					echo "<span class='fh5co-meta fh5co-date'>$konten[tglposting]</span>";
					echo "</article>";
					$urut2 = $no % 2;
					$urut4 = $no % 4;
					
					if($urut4==0){
						echo "<div class='clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block'></div>";
					}else if($urut2==0){
						echo "<div class='clearfix visible-xs-block'></div>";
					}
					$no++;
				}
			}else{
				echo "<center><h3>Data Kosong</h3></center>";
			}
		?>
		</div>
	</div>

	<footer id="fh5co-footer">
		<p><small><?php $tahun=date("Y"); echo $footer." ".$tahun; ?></small></p>
	</footer>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

