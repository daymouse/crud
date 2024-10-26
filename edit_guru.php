<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from guru where id_guru='$id'");
while($isi = mysqli_fetch_array($data)){
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>edit siswa</title>
</head>


<body class="body-edit-guru">
        <?php
        include "nav.php";
        ?>

    <div class="container-edit">
        <form method="post" action="edit_guru_aksi.php" class="form-tambah-guru">
                 <span class="edit-span">EDIT DATA GURU</span>
                 <div class="edit-data">
                    <div class="input-cont">
                            <span>NAMA</span><br>
                            <input type="hidden" name="idg" value="<?php echo $isi['id_guru']?>">
                            <input type="text" name="nama" class="inpt" value="<?php echo $isi['nama_guru']?>">
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
                            <span>ID MAPEL</span><br>
                            <input type="number" name="idm" class="inpt" value="<?php echo $isi['id_mapel']?>">
                    </div>
                    <div class="input-cont">
                            <span>TELP</span><br>
                            <input type="number" name="tlpn" class="inpt" value="<?php echo $isi['telp']?>">
                    </div>
                 </div>
                 <input type="submit" name="submit" class="submit"></td>
        </form>
    </div>
        <?php
        }
        ?>
</body>

           