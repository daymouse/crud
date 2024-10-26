<?php
include "koneksi.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>datakelas</title>
</head>
<body class="body-kelas">
        <?php
        include "nav.php";
        ?>
    
    <header><span>DATA KELAS</span></header>
    <div class="container">
        <table >
            <tr style="background-color: #b7b5b5;">
                <th>ID Kelas</th>
                <th>Nama kelas</th>
                <th>Lainnya</td>
            </tr>

            <?php
            $data = mysqli_query($koneksi,"select * from kelas");
            while($tampil = mysqli_fetch_array($data)) {
            ?>
            <tr class="tr-data">
                <td><?php echo $tampil ['id_kelas'];?></td>
                <td><?php echo $tampil ['nama_kelas'];?></td>
                <td class="lain"><a href="delete_kelas.php?id=<?php echo $tampil['id_kelas'];?>"><i data-feather="delete" class="lain-1"></i></a>
                    <a href="edit_kelas.php?id=<?php echo $tampil['id_kelas'];?>"><i data-feather="edit" class="lain-1"></i></a>
                </td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>
    <div class="container2">
        <a href="tambah_kelas.php" class="tambah"><i data-feather="plus-circle" style="width: 7rem; height: 7rem;"></i></a>
    </div>
    <script>
      feather.replace();
    </script>

</body>


