<!DOCTYPE html>
<html>
<head>
	<title>Contoh Layout HTML dan CSS</title>
	<style>
		  body {
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
      }
		.container {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			height: 500px; /* mengatur tinggi container */
			width: 700px; /* mengatur lebar container */
		}

		.left-container {
			width: 50%;
			background-color: #2c3e50;
			color: #fff;
			padding: 50px;
			margin-top: 30px;]
		}

		.right-container {
			width: 50%;
			background-color: red;
			padding: 50px;\
		}

		.circle {
			width: 150px;
			height: 150px;
			margin: 0 auto;
		}

		 .circle img {
        width: 100%;
        border-radius: 50%;
        height: 100%;
        object-fit: cover;
      }

		.name {
			font-size: 36px;
			font-weight: bold;
			margin: 20px 0;
			text-align: center;
		}

		.job {
			font-size: 24px;
			margin-bottom: 20px;
			text-align: center;
		}

		.info {
			font-size: 18px;
			line-height: 1.5;
			text-align: justify;
		}
	</style>
</head>
<body>
	<h1>Biodata Diri</h1>
	<div class="container">
		
		<div class="left-container">
			<div class="circle">
				<img src="asset/profil.png">
			</div>
			<h1 class="name">Nama Lengkap</h1>
			<p class="job">Jabatan</p>
			<p class="info">
				  	Mahasiswa S-1 Teknologi Informasi Usu 2020
      	<hr>
      	<h1>Profil Pribadi</h1>
      	<table>
      		<tr>
      			<td>Tempat/Tgl Lahir</td>
      			<td>:</td>
      			<td>Dolok Masihul/ 08 Juli 2002</td>
      		</tr>
      		<tr>
      			<td>Jenis Kelamin</td>
      			<td>:</td>
      			<td>Perempuan</td>
      		</tr>
      		<tr>
      			<td>Agama</td>
      			<td>:</td>
      			<td>Islam</td>
      		</tr>
      		<tr>
      			<td>Warga Negara</td>
      			<td>:</td>
      			<td>Indonesia</td>
      		</tr>
      		<tr>
      			<td>Status</td>
      			<td>:</td>
      			<td>Lajang</td>
      		</tr>
      	</table>
      	<h1>Keahlian & Kemampuan</h1>
      	<ul>
      		<li>Memahami penggunaan aplikasi editing video seperti filmora.</li>
			<li>Dapat berkomunikasi dengan baik.</li>
			<li>Memahami penggunaan microsoft office dengan baik.</li>
			<li>Memahami penggunaan framework Laravel 8.</li>
			<li>Mampu mengoperasikan bahasa pemrograman PHP, JavaScript, C, dan C++.</li>
			<li>Memahami HTML dan CSS.</li>
      	</ul>
			</p>
		</div>
		<div class="right-container">
			<div class="circle"></div>
		</div>
	</div>
</body>
</html>
