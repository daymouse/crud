<?php
include "koneksi.php";
?>
<nav>
   <span class="logo">Data <span class="logo-1">Sekolah</span></span>
   <div class="menu">
       <a href="dash.php">Home</a>
       <div class="men-sis">
           <a href="siswa.php">Siswa&#9662;</a>
           <div class="men-sis-1">
               <?php
               $data = mysqli_query($koneksi, "SELECT * FROM kelas");
               while($tampil = mysqli_fetch_array($data)) {
                   ?>
                   <a href="siswa.php?kelas=<?php echo $tampil['id_kelas']; ?>"><?php echo $tampil['nama_kelas']; ?></a>
                   <?php
               }
               ?>
           </div>
       </div>
       <div class="men-sis">
           <a href="guru.php">Guru&#9662;</a>
           <div class="men-gur-1">
               <?php
               $data = mysqli_query($koneksi, "SELECT * FROM mapel");
               while($tampil = mysqli_fetch_array($data)) {
                   ?>
                   <a href="guru.php?idm=<?php echo $tampil['id_mapel']; ?>"><?php echo $tampil['nama_mapel']; ?></a>
                   <?php
               }
               ?>
           </div>
       </div>
       <a href="kelas.php">Kelas</a>
       <a href="mapel.php">Mapel</a> 
       <a href="login.php">logout</a> 
   </div> 
   <div></div>
</nav>
