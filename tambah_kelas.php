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
    <form method="post" action="tambah_kelas_aksi.php" class="form-tambah">
        <span class="edit-span">TAMBAH DATA KELAS</span>
                    <div class="edit-data">
                            <div class="input-cont">
                                    <span>ID KELAS</span><br>
                                    <input type="number" name="idk" class="inpt">
                            </div>
                            <div class="input-cont">
                                    <span>NAMA KELAS</span><br>
                                    <input type="text" name="nama" class="inpt">
                            </div>
                    </div>
                    <input type="submit" name="submit" class="submit">

        </form>
    </body>
   
