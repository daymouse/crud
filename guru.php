<?php
include "koneksi.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>dataguru</title>
</head>

<body class="body-guru">

        <?php
        include "nav.php";
        ?>
    <header><span>DATA GURU</span></header>
    <div class="container">
            <table >
                <tr style="background-color: #b7b5b5;">
                    <th>ID Guru</th>
                    <th>Nama Guru</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>TTL</th>
                    <th>ID Mapel</th>
                    <th>NO TLPN </th>
                    <th>Lainnya </th>
                </tr>

                <?php
                if (isset($_GET['idm'])) {
                    $idm = $_GET['idm'];
                    $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE id_mapel = $idm");
                } else {
                    $data = mysqli_query($koneksi, "SELECT * FROM guru");
                }
                  while ($tampil = mysqli_fetch_array($data)) {
                ?>
                <tr class="tr-data">
                    <td><?php echo $tampil ['id_guru'];?></td>
                    <td><?php echo $tampil ['nama_guru'];?></td>
                    <td><?php echo $tampil ['alamat'];?></td>
                    <td><?php echo $tampil ['gender'];?></td>
                    <td><?php echo $tampil ['ttl'];?></td>
                    <td><?php echo $tampil ['id_mapel'];?></td>
                    <td><?php echo $tampil ['telp'];?></td>
                    <td class="lain"><a href="delete-guru.php?id=<?php echo $tampil['id_guru'];?>"><i data-feather="delete" class="lain-1"></i></a>
                    <a href="edit_guru.php?id=<?php echo $tampil['id_guru'];?>"><i data-feather="edit" class="lain-1"></i></a>
                    </td>
                </tr>

            <?php
            }
            ?>
            </table>
    </div>
    <div class="container2">
        <a href="tambah_guru_.php" class="tambah"><i data-feather="plus-circle" style="width: 7rem; height: 7rem;"></i></a>
    </div>
    <script>
      feather.replace();
    </script>
</body>