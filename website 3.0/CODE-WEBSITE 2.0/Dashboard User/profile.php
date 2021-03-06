<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<script type="text/javascript" src="chart.js" ></script>
	<link rel="icon" href="image/favicon.ico">
</head>
<body>
	<div class="nav-device">
		<img class="openNav" onclick="openNav()" src="https://img.icons8.com/material-two-tone/24/000000/menu--v3.png"/>
	</div>
	<div id="slideNav" class="slide-nav">
		<a class="closenav"  onclick="closeNav()"><img src="https://img.icons8.com/ios-glyphs/30/000000/multiply.png"/></a>
		<div class="logo">
			<a href="laporuns.com"><img src="image/logo.png"></a>
		</div>
		<ul>
			<li>
				<img src="image/icon dashboard.png">
				<a href="file:///Users/ugiv46/Downloads/LAPORUNS/website%203.0/CODE-WEBSITE%202.0/Dashboard%20User/dashboard.html">Dashboard</a>
			</li>
			<li>
				<img src="image/icon akuntan.png">
				<a href="#">Akuntan</a>
			</li>
			<li>
				<img src="image/icon laporan.png">
				<a href="file:///Users/ugiv46/Downloads/LAPORUNS/website%203.0/CODE-WEBSITE%202.0/Dashboard%20User/dashboard%20laporan.html">Laporan</a>
			</li>
			<li class="active">
				<img src="image/icon profile.png">
				<a href="#">Profile</a>
			</li>
			<li>
				<img src="image/icon sign out.png">
				<a href="#">Sign Out</a>
			</li>
		</ul>
	</div>
	<nav>	
		<div class="logo">
			<a href="laporuns.com"><img src="image/logo.png"></a>
		</div>
		<ul>
			<li>
				<img src="image/icon dashboard.png">
				<a href="file:///Users/ugiv46/Downloads/LAPORUNS/website%203.0/CODE-WEBSITE%202.0/Dashboard%20User/dashboard.html">Dashboard</a>
			</li>
			<li>
				<img src="image/icon akuntan.png">
				<a href="#">Akuntan</a>
			</li>
			<li>
				<img src="image/icon laporan.png">
				<a href="file:///Users/ugiv46/Downloads/LAPORUNS/website%203.0/CODE-WEBSITE%202.0/Dashboard%20User/dashboard%20laporan.html">Laporan</a>
			</li>
			<li class="active">
				<img src="image/icon profile.png">
				<a href="#">Profile</a>
			</li>
			<li>
				<img src="image/icon sign out.png">
				<a href="#">Sign Out</a>
			</li>
		</ul>
	</nav>
	<div class="header-dashboard">
		<div class="profile-picture">
			<div class="picture">
				<img src="image/ugi.jpg">
			</div>	
			<div class="name">
				<h4>Ugi Valentino</h4>
			</div>		
		</div>
		<h3 class="title">NIRMA.ID</h3>
		</div>
		
	</div>
	<main class="form">
		<div class="title-profile">
			<h2>Profile Anda</h2>
		</div>
		<form method="GET">
			<section class="section-1">
				<label for="nama">Nama</label><br>
				<input id="nama" type="text" name="nama" <?php value="$name"?> ><br>
				<label for="email">Email</label><br>
				<input id="email" type="email" name="email" value="$email"><br>
				<label for="Perusahaan">Nama Perusahaan</label><br>
				<input id="Perusahaan" type="text" name="Perusahaan" value="$nama_perusahaan"><br>
				<label for="phone">No Handphone</label><br>
				<input id="phone" type="text" name="phone" value="$phone_number"><br>
			</section>
			<section class="section-2">
				<label for="alamat">Alamat Perusahaan</label><br>
				<input id="alamat" type="text-box" name="nama" value="$nama"><br>
				<label for="password">Password</label><br>
				<input id="password" type="password" name="password" value="$password"><br>
				<label for="umur-perusahaan">Umur Perusahaan</label><br>
				<input id="umur-Perusahaan" type="text" name="umur-perusahaan" value="$umur_perusahaan"><br>
				<label for="jenis-perusahaan">Jenis Perusahaan</label><br>
				<input list="jenis-perusahaan" id="jenis" name="jenis" value="$jenis"><br>
				<datalist id="jenis-perusahaan">
					<option>Jasa</option>
					<option>Dagang</option>
					<option>Manufacture</option>
				</datalist>
			</section>
				<input id="submit" type="submit" name="submit" value="Update">
		</form>
	</main>

<?php
	$name = $GET['name'];

?>

<script type="text/javascript">
	function openNav() {
		document.getElementById("slideNav").style.display = "block";
	}
	function closeNav() {
		document.getElementById("slideNav").style.display = "none";
	}
</script>

</body>
</html>