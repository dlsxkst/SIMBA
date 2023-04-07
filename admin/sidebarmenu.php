<?php 
	 include '../koneksi/koneksi.php';
			$sql  		= "SELECT * FROM tb_admin where id_admin='".$_SESSION['id']."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
?>
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-folder"></i> <span> Simba</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?php echo $data['gambar']; ?>" height="55" width="55" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $_SESSION['nama'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                   <li><a href="index.php"><i class="fa fa-tachometer"></i>Dashboard <span></span></a></li>
                    <li><a><i class="fa fa-file-text"></i> Kategori Berkas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="databerkas.php"><i class="fa fa-folder"></i>Berkas 1</a></li>
                    </ul>
                  </li>
                   <li><a href="datauser.php"><i class="fa fa-users"></i> Kelola User <span></span></a></li>
                   <li><a href="profile.php"><i class="fa fa-user"></i> Profile <span></span></a></li>
                  <li><a href="../koneksi/proses_logout.php"><i class="fa fa-sign-out" onclick="return confirm ('Apakah Anda Akan Keluar.?');"></i>Logout</a></li>
                 
                  
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
