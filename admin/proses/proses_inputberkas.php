<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$nomor_berkas		= mysqli_real_escape_string($db,$_POST['nomor_berkas1']);
	$tentang			= mysqli_real_escape_string($db,$_POST['tentang']);
	$tahun              = mysqli_real_escape_string($db,$_POST['tahun']);
    $operator	        = mysqli_real_escape_string($db,$_POST['operator']);
	
        date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
	
	$nama_file_lengkap 		= $_FILES['file_berkas1']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['file_berkas1']['type'];
	$ukuran_file 	= $_FILES['file_berkas1']['size'];
	$tmp_file 		= $_FILES['file_berkas1']['tmp_name'];
	
	
	// $ambilnomor                 = substr("$nomor_berkas1",0,13);
		// $nomor = str_replace(' ', '-', $ambilnomor);
	
    if (!($nomor_berkas=='') and !($tentang =='') and !($tahun =='') and !($operator =='') and !($tanggal_entry =='') and   
		($tipe_file == "application/pdf") and ($ukuran_file <= 203400000)){		
		
		$nama_baru = $thnNow.'-'.$nomor_berkas. $ext_file;
		$path = "../berkas1/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_berkas1 (id_berkas1, nomor_berkas1, tentang, tahun, file_berkas1, operator, tanggal_entry) VALUES  (NULL, '$nomor_berkas', '$tentang', '$tahun', '$nama_baru', '$operator', '$tanggal_entry')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Data Berkas Telah Ditambahkan</h2></center>
			<meta http-equiv='refresh' content='2;url=../databerkas.php'>";
	} 
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
			<meta http-equiv='refresh' content='2;url=../inputberkas.php'>";
	}
	
?>
	