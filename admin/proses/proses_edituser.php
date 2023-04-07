<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				           		    = mysqli_real_escape_string($db,$_POST['id_bagian']);
	
	$nama_user				            = mysqli_real_escape_string($db,$_POST['nama_bagian']);
	$username				 	            = mysqli_real_escape_string($db,$_POST['username_admin_bagian']);
	$password	=	mysqli_real_escape_string($db,sha1($_POST['password_bagian'])); 
  

			
	
	$sql  		= "SELECT * FROM tb_bagian where id_bagian='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	

	if (!($nama_user=='') and !($username =='') and !($password =='')) 
		{		
		$sql = "UPDATE tb_bagian set 
						nama_bagian 			= '$nama_user',
						username_admin_bagian		= '$username',
						password_bagian			= '$password'
						
				where id_bagian = $id";
				
		$execute = mysqli_query($db, $sql);			
		
		
		$_SESSION['username']= $username;
						
		echo "<Center><h2><br>Data User telah diubah</h2></center>
		<meta http-equiv='refresh' content='2;url=../datauser.php'>";
	}	
	
		else{
			echo "<Center><h2><br>Gambar yang anda masukkan tidak sesuai ketentuan<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=../edituser.php'>";
		}
	
	
	?>
	