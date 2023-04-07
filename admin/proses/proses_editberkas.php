<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				           		    = mysqli_real_escape_string($db,$_POST['id_berkas1']);
	$nomor_berkas	                    = mysqli_real_escape_string($db,$_POST['nomor_berkas1']);
	$tentang				            = mysqli_real_escape_string($db,$_POST['tentang']);
	$tahun				 	            = mysqli_real_escape_string($db,$_POST['tahun']);
    $operator	                        = mysqli_real_escape_string($db,$_POST['operator']);

	

     date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");


        
        // $ambilnomor                 = substr("$nomor_berkas",0,13);
        // 	$nomor = str_replace(' ', '-', $ambilnomor);
	
	$sql  		= "SELECT * FROM tb_berkas1 where id_berkas1='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	$file_berkas			            = $_FILES['file_berkas1']['name'];
	
    //jika gambar tidak ada
	if ($file_berkas == ''){
		$ext			= substr($data['file_berkas1'], strripos($data['file_berkas1'], '.'));	
		$nama_b  		= $thnNow.'-'.$nomor_berkas. $ext;
		rename("../berkas1/".$data['file_berkas1'], "../berkas1/".$nama_b);
		$sql = "UPDATE tb_berkas1 set 
						nomor_berkas1 			= '$nomor_berkas',
						tentang                 = '$tentang',
						tahun	    			= '$tahun',
                        operator            	    = '$operator',
                        tanggal_entry               = '$tanggal_entry',
						file_berkas1		            = '$nama_b' 
				where id_berkas1 = $id"; 
				
		$execute = mysqli_query($db, $sql);			
						
		echo "<Center><h2><br>Data Berkas telah diubah</h2></center>
		<meta http-equiv='refresh' content='2;url=../detail-berkas.php?id_berkas1=".$id."'>";
	}	
	else{
		
        $tipe_file 		= $_FILES['file_berkas1']['type'];
        $ukuran_file 	= $_FILES['file_berkas1']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 20340000)){	
			unlink("../berkas1/".$data['file_berkas1']);
			$ext_file		= substr($file_berkas, strripos($file_berkas, '.'));			
			$tmp_file 		= $_FILES['file_berkas1']['tmp_name'];
			
			$nama_baru = $thnNow.'-'.$nomor_berkas. $ext_file;
			$path = "../berkas1/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_berkas1 set 
						nomor_berkas1			    = '$nomor_berkas',
						tentang                 = '$tentang',
						tahun					= '$tahun',
                        operator            	    = '$operator',
                        tanggal_entry               = '$tanggal_entry',
						file_berkas1         		= '$nama_baru'
				where id_berkas1 = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<Center><h2><br>Data Berkas telah diubah</h2></center>
				<meta http-equiv='refresh' content='2;url=../detail-berkas.php?id_berkas1=".$id."'>";			
		}
		else{
			echo "<Center><h2><br>File yang anda masukkan tidak sesuai ketentuan<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=../editberkas.php?id_berkas1=".$id."'>";
		}
	
	}
	?>
	