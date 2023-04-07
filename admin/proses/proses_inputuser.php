<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	
	$nama_user		= mysqli_real_escape_string($db,$_POST['nama_bagian']);
	$username			= mysqli_real_escape_string($db,$_POST['username_admin_bagian']);
	$password             = mysqli_real_escape_string($db,sha1($_POST['password_bagian']));
	$gambar = 'default.jpg';
	

	
	if (!($nama_user=='') and !($username =='') and !($password =='')) 
		{		
		
	
		$sql = "INSERT INTO tb_bagian (id_bagian, nama_bagian, username_admin_bagian, password_bagian, gambar) VALUES  (NULL, '$nama_user', '$username', '$password', '$gambar')";
		$execute = mysqli_query($db, $sql);
		
		echo "<Center><h2><br>Terima Kasih<br>Data User Telah Ditambahkan</h2></center>
			<meta http-equiv='refresh' content='2;url=../datauser.php'>";
	}
	else{
		echo "<Center><h2>Silahkan isi semua kolom lalu tekan submit<br>Terima Kasih</h2></center>
			<meta http-equiv='refresh' content='2;url=../inputuser.php'>";
	}
	
?>
	