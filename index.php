<?php

	//	Instruksi Kerja Nomor 1.
	//	Variabel $kendaraan berisi data jenis kendaraan yang dipesan dalam bentuk array satu dimensi.
	//  ....

	//	Instruksi Kerja Nomor 2.
	//	Mengurutkan array $kendaraan secara Ascending.
	//  ....

	//	Instruksi Kerja Nomor 6.
	//	Baris Komentar: ......
	function hitung_sewa(){
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pemesanan Taxi Online</title>
		<!-- Instruksi Kerja Nomor 4. -->
		<!-- Menghubungkan dengan library/berkas CSS. -->

	</head>
	
	<body>
	<div class="container border">
		<!-- Menampilkan judul halaman -->
		<h3>Pemesanan Taxi Online</h3>
		
		<!-- Instruksi Kerja Nomor 5. -->
		<!-- Menampilkan logo Taxi Online -->
		
		
		<!-- Form untuk memasukkan data pemesanan. -->
		<form action="index.php" method="post" id="formPemesanan">
			<div class="row">
				<!-- Masukan data nama pelanggan. Tipe data text. -->
				<div class="col-lg-2"><label for="nama">Nama Pelanggan:</label></div>
				<div class="col-lg-2"><input type="text" id="nama" name="nama"></div>
			</div>
			<div class="row">
				<!-- Masukan data nomor HP pelanggan. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Nomor HP:</label></div>
				<div class="col-lg-2"><input type="number" id="noHP" name="noHP" maxlength="16"></div>
			</div>
			<div class="row">
				<!-- Masukan pilihan jenis kendaraan. -->
				<div class="col-lg-2"><label for="tipe">Jenis Kendaraan:</label></div>
				<div class="col-lg-2">
					<select id="kendaraan" name="kendaraan">
					<option value="">- Jenis kendaraan -</option>
					<?php
						//	Instruksi Kerja Nomor 3.
						//	Menampilkan dropdown pilihan jenis kendaraan berdasarkan data pada array $kendaraan menggunakan perulangan.
					?>	
					</select>
				</div>
			</div>
			
			<div class="row">
				<!-- Masukan data Jarak Tempuh. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Jarak:</label></div>
				<div class="col-lg-2"><input type="number" id="jarak" name="jarak" maxlength="4"></div>
			</div>
			<div class="row">
				<!-- Tombol Submit -->
				<div class="col-lg-2"><button class="btn btn-primary" type="submit" form="formPemesanan" value="Pesan" name="Pesan">Pesan</button></div>
				<div class="col-lg-2"></div>		
			</div>
		</form>
	</div>
	<?php
		
		if(isset($_POST['Pesan'])) {
			
			//	Variabel $dataPesanan berisi data-data pemesanan dari form dalam bentuk array.
			
			$dataPesanan = array(
				'nama' => $_POST['nama'],
				'noHP' => $_POST['noHP'],
				'kendaraan' => $_POST['kendaraan'],
				'jarak' => $_POST['jarak']
			);

			// Instruksi Kerja Nomor 7
            // Simpan jarak yang telah dimasukkan oleh pengguna dalam variabel $jarak_tempuh
            // ...


			// Instruksi Kerja Nomor 8 (Percabangan)
			// Gunakan pencabangan untuk menentukan biaya platform dan biaya sewa per kilometer
            // Simpan biaya platform dan biaya sewa per kilometer dalam variabel $biaya_platform dan $sewa_per_km
            // ARJUN NOURMANSYAH RAMDANI


            // Instruksi kerja Nomor 9
            // Gunakan fungsi hitung_sewa untuk menghitung biaya sewa
            // Simpan hasil perhitungan fungsi dalam variabel $biaya_sewa
            // ...
            			
			
			// Instruksi Kerja Nomor 10.
			// Simpan data pemesanan yang ke dalam file JSON
            // ...

			
			// Menampilkan data pemesanan dan total biaya sewa.
			// KODE DI BAWAH INI TIDAK PERLU DIMODIFIKASI!!!
			echo "
				<br/>
				<div class='container'>
					
					<div class='row'>
						<!-- Menampilkan nama pelanggan. -->
						<div class='col-lg-2'>Nama Pelanggan:</div>
						<div class='col-lg-2'>".$dataPesanan['nama']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan nomor HP pelanggan. -->
						<div class='col-lg-2'>Nomor HP:</div>
						<div class='col-lg-2'>".$dataPesanan['noHP']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Jenis Kendaraan Taxi Online. -->
						<div class='col-lg-2'>Jenis Kendaraan:</div>
						<div class='col-lg-2'>".$dataPesanan['kendaraan']."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan jumlah Jarak Tempuh. -->
						<div class='col-lg-2'>Jarak(km):</div>
						<div class='col-lg-2'>".$dataPesanan['jarak']." km</div>
					</div>
					<div class='row'>
						<!-- Menampilkan Total Tagihan. -->
						<div class='col-lg-2'>Total:</div>
						<div class='col-lg-2'>Rp".number_format($biaya_sewa, 0, ".", ".").",-</div>
					</div>
					
			</div>
			";
		}
	?>
	</body>
</html>
