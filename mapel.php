<?php
include "koneksi.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>datamapel</title>
</head>

<body class="body-mapel">
    <?php
    include "nav.php";
    ?>
    
    <header><span>DATA MAPEL</span></header>
    <div class="container">
            <table >
                <tr style="background-color: #b7b5b5;">
                    <th>ID Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Lainnya</th>
                </tr>

                <?php
                
                $data = mysqli_query($koneksi,"select * from mapel");
                while($tampil = mysqli_fetch_array($data)) {
                ?>
                <tr class="tr-data">
                    <td><?php echo $tampil ['id_mapel'];?></td>
                    <td><?php echo $tampil ['nama_mapel'];?></td>
                    <td class="lain">
                        <a href="delete-mapel.php?id=<?php echo $tampil['id_mapel'];?>"><i data-feather="delete" class="lain-1"></i></a>
                        <a href="edit_mapel.php?id=<?php echo $tampil['id_mapel'];?>"><i data-feather="edit" class="lain-1"></i></a>
                    </td>
                </tr>

            <?php
            }
            ?>
            </table>
    </div>
    <div class="container2">
        <a href="tambah_mapel.php" class="tambah"><i data-feather="plus-circle" style="width: 7rem; height: 7rem;"></i></a>
    </div>
    <script>
      feather.replace();
    </script>
</body>