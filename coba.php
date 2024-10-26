<?php
include "koneksi.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coba.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Data Siswa</title>
</head>

<body class="body-siswa">
    <?php
    include "nav.php";
    ?>
    
    <header><span>DATA SISWA</span></header>

    <div class="container">
        <!-- Search form -->
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by NISN, Name, Address, TTL, Class ID" />
            <button type="submit">Search</button>
        </form>

        <table>
            <tr style="background-color: #b7b5b5;">
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Gender</th>
                <th>ID Kelas</th>
                <th>Lainnya</th>
            </tr>

            <?php
            // Check if search input is set
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn LIKE '%$search%' OR nama_siswa LIKE '%$search%' OR alamat LIKE '%$search%' OR ttl LIKE '%$search%' OR id_kelas LIKE '%$search%'");
            } else if (isset($_GET['kelas'])) {
                $kelas = $_GET['kelas'];
                $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_kelas = $kelas");
            } else if(isset($_GET['siswa'])){
                $data = mysqli_query($koneksi, "SELECT * FROM siswa");
            } else{
                echo "nod faund";
            }
           
                    // Fetch and display data
                    while ($tampil = mysqli_fetch_array($data)) {
                    ?>
                        <tr class="tr-data">
                            <td><?php echo $tampil['nisn']; ?></td>
                            <td><?php echo $tampil['nama_siswa']; ?></td>
                            <td><?php echo $tampil['alamat']; ?></td>
                            <td><?php echo $tampil['ttl']; ?></td>
                            <td><?php echo $tampil['gender']; ?></td>
                            <td><?php echo $tampil['id_kelas']; ?></td>
                            <td>
                                <a href="delete-siswa.php?id=<?php echo $tampil['nisn']; ?>"><i data-feather="delete" class="lain-1"></i></a>
                                <a href="edit_siswa.php?id=<?php echo $tampil['nisn']; ?>"><i data-feather="edit" class="lain-1"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
           
        </table>
    </div>

    <div class="container2">
        <a href="tambah_siswa.php" class="tambah"><i data-feather="plus-circle" style="width: 7rem; height: 7rem;"></i></a>
    </div>

    <script>
        feather.replace();
    </script>
</body>

