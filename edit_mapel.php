<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from mapel where id_mapel='$id'");
while($isi = mysqli_fetch_array($data)){
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>edit mapel</title>
</head>


<body class="body-edit-mapel">
       <?php
        include "nav.php";
        ?>
    
    <div class="container-edit">
            <form method="post" action="edit_mapel_aksi.php" class="form-edit">
            <span class="edit-span">EDIT DATA MAPEL</span>
                 <div class="edit-data">
                    <div class="input-cont">
                            <span>MAPEL</span><br>
                            <input type="hidden" name="idm" value="<?php echo $isi['id_mapel']?>">
                            <input type="text" name="nama" class="inpt" value="<?php echo $isi['nama_mapel']?>">
                    </div>
                    </div> 
                    <input type="submit" name="submit" class="submit">
                 
            </form>
        <?php
        }
        ?>
    </div>
</body>