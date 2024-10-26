<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from siswa where nisn='$id'");
while($isi = mysqli_fetch_array($data)){
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>edit siswa</title>
</head>


<body class="body-tambah-siswa">
        <?php
        include "nav.php";
        ?>
    

    <div class="container-edit">
            <form method="post" action="edit_siswa_aksi.php" class="form-edit" >
                 <span class="edit-span">EDIT DATA SISWA</span>
                 <div class="edit-data">
                    <div class="input-cont">
                            <span>NAMA</span><br>
                            <input type="hidden" name="nisn" value="<?php echo $isi['nisn']?>">
                            <input type="text" name="nama" class="inpt" value="<?php echo $isi['nama_siswa']?>">
                    </div>
                    <div class="input-cont">
                            <span>ALAMAT</span><br>
                            <input type="text" name="alamat" class="inpt" value="<?php echo $isi['alamat']?>">
                    </div>
                    <div class="input-cont">
                            <span>TANGGAL LAHIR</span><br>
                            <input type="date" name="tanggal" class="inpt" value="<?php echo $isi['ttl']?>">  
                    </div>
                    <div class="input-cont">
                            <span>GANDER</span><br>
                            <input type="text" name="gender" class="inpt" value="<?php echo $isi['gender']?>">
                    </div>
                    <div class="input-cont">
                            <span>ID KELAS</span><br>
                            <input type="number" name="idk" class="inpt" value="<?php echo $isi['id_kelas']?>">
                    </div>
                 </div>
                 <input type="submit" name="submit" class="submit"></td>
            </form>
    </div>
    
                <?php
                }
                ?>
</body>