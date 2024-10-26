<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>tambah siswa</title>
</head>
<body class="body-tambah-siswa">
        <?php
        include "nav.php";
        ?>
    
    <div class="container-edit">
    <form method="post" action="tambah_siswa_aksi.php" class="form-tambah">
        <span class="edit-span">TAMBAH DATA SISWA</span>
                    <div class="edit-data">
                            <div class="input-cont">
                                    <span>NISN</span><br>
                                    <input type="number" name="nisn" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>NAMA</span><br>
                                    <input type="text" name="nama" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>ALAMAT</span><br>
                                    <input type="text" name="alamat" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>TANGGAL LAHIR</span><br>
                                    <input type="date" name="tanggal" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>GANDER</span><br>
                                    <input type="text" name="gender" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>ID KELAS</span><br>
                                    <input type="number" name="kelas" class="inpt">
                            </div>
                    </div>
                    <input type="submit" name="submit" class="submit">
        </form>
    </body>
   