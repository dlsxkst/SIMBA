<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_berkas1'])) {

	$id = $_GET['id_berkas1'];
    	

	$sql2  		= "SELECT * FROM tb_berkas1 where id_berkas1='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_berkas1 WHERE id_berkas1='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../berkas1/".$data2['file_berkas1']);
                echo "<Center><h2><br>Data Berkas telah Dihapus</h2></center>
				<meta http-equiv='refresh' content='2;url=../databerkas.php'>";
            }		else{
			echo "<Center><h2><br>GAGAL MENGHAPUS<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=../databerkas.php'>";
	}	
}	
}						
?>   