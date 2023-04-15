<!DOCTYPE html>
<html>
  <head>
    <title>Biodata Diri || Diah Paramitha</title>

    <link rel="stylesheet" type="text/css" href="asset/style.css">
  </head>
  <body>
  	<?php 
  		$foto = "asset/profil.png";
  		$nama = "Diah Paramitha";
  		$deskripsi = "Mahasiswa S-1 Teknologi Informasi Usu 2020";
  		$profil_list = array('Tempat/Tgl Lahir', 'Jenis Kelamin', 'Agama', 'Warga Negara', 'Status');
		$profil = array('Dolok Masihul, 08 Juli 2002', 'Perempuan', 'Islam', 'Indonesia', 'Belum Menikah');
  		$keahlian = array("Memahami penggunaan aplikasi editing video seperti filmora", "Dapat berkomunikasi dengan baik", "Memahami penggunaan microsoft office dengan baik", "Memahami penggunaan framework Laravel 8", "Mampu mengoperasikan bahasa pemrograman PHP, JavaScript, C, dan C++", "Memahami HTML dan CSS");
  		$minat_hobi = "Saya tertarik mempelajari web design, website, dan juga editing video. Saat ini saya sedang 
			mempelajari editing video dan website. Saya juga senang melihat hasil editing video orang 
			lain dan mencoba teknik yang mereka gunakan.";
  		$kontak_list = array('WhatsApp', 'Email', 'Instagram');
    	$kontak = array('08987654321', 'diahparamitha01@gmail.com', 'dhpramth07_');
  		$pendidikan = array("SMAN 1 Tebing Tinggi - MIPA", "S-1 Teknologi Informasi USU");
  		$tahun = array( array("Tahun 2017 - 2020", "Tahun 2020 - Sekarang") );

  		$organisasi = array("Himpunan Mahasiswa Teknologi Informasi Periode 2022/2023 Universitas Sumatera Utara", "Information Techonology Laboratory Group Periode 2022/2023 Universitas Sumatera Utara", "Information Techonology Laboratory Group Periode 2022/2023 Universitas Sumatera Utara");
  		$anggota = array( array("Anggota Divisi Multimedia dan Komunikasi Informasi", "Koordinator Divisi Media dan Informasi", "Assistant Laboratory - Web Semantic"));
  		$program = array("Kepanitian Penerimaan Mahasiswa Baru TI USU 2021", "Program Kredensial Mikro Mahasiswa Indonesia (KMMI) Kemdikbud 2021", "Baparekraf Developer Day 2022 oleh Dicoding", "Fundamental SQL Using SELECT Statement oleh DQLab", "Life As Software Engineer oleh Himsi UIN Jakarta");
  		$sebagai = array( array('Anggota Divisi Rohani', 'Peserta', 'Peserta', 'Peserta', 'Peserta') );

  	?>

  	<h1>Biodata Diri</h1>
    <div class="container">
    	<div class="left">
	      <div class="circle">
	        <?php echo "<img src='$foto' alt='Foto Profil'>" ?>
	      </div>
	      <div class="profil">
	      	<?php echo "<h1>$nama</h1>" ?>
	      	<?php echo "<p>Mahasiswa S-1 Teknologi Informasi Usu 2020</p>" ?>
	      	<hr>
	      	<h1>Profil Pribadi</h1>
	      	<table>
			    <?php
			    for ($i = 0; $i < count($profil_list); $i++) {
			    ?>
			        <tr>
			            <td><?php echo $profil_list[$i] ?></td>
			            <td>:</td>
			            <td><?php echo $profil[$i] ?></td>
			        </tr>
			    <?php 
			    }
			    ?>
			</table>

	      	<h1>Keahlian & Kemampuan</h1>
	      	<ul>
	      		<?php
	      		foreach ($keahlian as $ahli) {
	      			echo "<li> $ahli </li>";
	      		}
	      		?>
	      	</ul>

	      	<h1>Minat & Hobi</h1>
	      	<?php echo "<p> $minat_hobi </p>" ?>

			<h1>Informasi Kontak</h1>
			<table>
			    <?php 
			    for ($i = 0; $i < count($kontak_list); $i++) {
			    ?>
			        <tr>
			            <td><?php echo $kontak_list[$i] ?></td>
			            <td>:</td>
			            <td><?php echo $kontak[$i] ?></td>
			        </tr>
			    <?php 
			    }
			    ?>
			</table>

	      </div>
    	</div>

    <div class="right">
    	<div class="profil-kanan">
    		<h1>Riwayat Pendidikan</h1>
    		<?php
			    foreach ($pendidikan as $didik) {
			        echo "<p><strong> $didik </strong></p>";
			        foreach ($tahun as $thn) {
			            if ($didik == $pendidikan[0]) {
			                echo "<p> $thn[0] </p>";
			            }
			            else if ($didik == $pendidikan[1]) {
			                echo "<p> $thn[1] </p>";
			            }
			        }
			    }
			?>

    		<h1>Riwayat Organisasi</h1>
    		<?php
			    foreach ($organisasi as $kerja) {
			        echo "<p><strong> $kerja </strong></p>";
			        foreach ($anggota as $member) {
			            if ($kerja == $organisasi[0]) {
			                echo "<p> $member[0] </p>";
			            }
			            else if ($kerja == $organisasi[1]) {
			                echo "<p> $member[1] </p>";
			            }
			             else if ($kerja == $organisasi[2]) {
			                echo "<p> $member[2] </p>";
			            }
			        }
			    }
			?>


    		<h1>Riwayat Kepanitiaan/Kegiatan</h1>
    		<?php
			    foreach ($program as $prog) {
			        echo "<p><strong> $prog </strong></p>";
			        foreach ($sebagai as $sbg) {
			            if ($prog == $program[0]) {
			                echo "<p> $sbg[0] </p>";
			            }
			            else if ($prog == $program[1]) {
			                echo "<p> $sbg[1] </p>";
			            }
			             else if ($prog == $program[2]) {
			                echo "<p> $sbg[2] </p>";
			            }
			            else if ($prog == $program[3]) {
			                echo "<p> $sbg[3] </p>";
			            }
			             else if ($prog == $program[4]) {
			                echo "<p> $sbg[4] </p>";
			            }

			        }
			    }
			    echo "<br>";
			?>

    	</div>
    </div>
    </div>
  </body>
</html>

