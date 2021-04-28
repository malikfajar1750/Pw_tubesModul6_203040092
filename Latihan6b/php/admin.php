  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
    // Menghubungkan dengan file PHP lainnya
    require 'functions.php';
    include 'koneksi.php';

    // Melakukan Query
    $toko_kaset = query("SELECT * FROM daftar_kaset");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../css/fontawesome.min.css?v2" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/admin.css?v2" />
    <title>Halaman Admin</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="query" placeholder="Cari Data" />
        <input type="Sumbit" name="cari" value="Srearch">
    </form><br>
    <?php
    $query = $_POST['query'];
    echo $query; 
    ?>
        <div class="container-lg">
         <div class="add">
            <a href="tambah.php" class="btn btn-outline-info"><i class="fas fa-plus-circle"></i>Tambah Data Kaset</a>
        </div>

        <div class="container-lg">
         <div class="hapus">
            <a href="hapus.php?id=<? $kaset['id']?>" oncllick="retrun confirm('Hapus Data??')">Hapus</a>
        </div>

        <div class=" container-lg">
         <button> <a href="logout.php">logout</a></button>
            
        </div>


        <table class="table table-bordered">
            <thead>
                <tr style=" font-weight:bold; ">
                    <th>No.</th>
                    <th>Opsi</th>
                    <th>Gambar</th>
                    <th>Judul Kaset</th>
                    <th>rilis kaset</th>
                    <th>Stok kaset</th>
                    <th>Harga</th>
                </tr>      
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($toko_kaset as $kaset) : ?>
            <tbody>
                <tr>
                    <td>
                        <b><?= $i; ?></b>
                    </td>
                    <td>
                        <div class=" wrapper-opt-btn">
                            <a href=""><button type="button" class="btn btn-primary btn-sm"><i
                                        class="fas fa-edit"></i><br>Ubah</button></a>
                            <a href=""><button type="button" class="btn btn-danger btn-sm"><i
                                        class="fas fa-trash-alt"></i><br>Hapus</button></a>
                        </div>
                    </td>
                    <td>
                        <img src="../assets/img/<?= $kaset["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $kaset["judul_kaset"]; ?></td>
                    <td><?= $kaset["rilis_kaset"]; ?></td>
                    <td><?= $kaset["stock_kaset"]; ?></td>
                    <td><?= $kaset["harga"]; ?></td>
                </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Fontawesome Js -->
    <script src="../js/fontawesome.min.js"></script>
</body>

</html>