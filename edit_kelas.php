<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from kelas where id_kelas='$id'");
while($isi = mysqli_fetch_array($data)){
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>edit kelas</title>
</head>


<body class="body-edit-kelas">
       <?php
        include "nav.php";
        ?>
    <div class="container-edit">
        <form method="post" action="edit_kelas_aksi.php" class="form-edit">
                    <span class="edit-span">EDIT DATA KELAS</span>
                    <div class="edit-data">
                        <div class="input-cont">
                                <span>KELAS</span><br>
                                <input type="hidden" name="idk" value="<?php echo $isi['id_kelas']?>">
                                <input type="text" name="nama" class="inpt" value="<?php echo $isi['nama_kelas']?>">
                        </div> 
                    </div>
                    <input type="submit" name="submit" class="submit">
        </form>
    </div>
<?php
}
?>
</body>