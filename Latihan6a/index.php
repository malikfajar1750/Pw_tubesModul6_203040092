  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $toko_Kaset = query("SELECT * FROM daftar_kaset");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Daftar Kaset</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col" colspan="2">kaset</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($toko_Kaset as $kaset) : ?>
                <tr>
                    <td>
                        <div class="id-kaset">
                            <p class="text-center"><?= $kaset["id"]; ?>.</p>
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="judul-kaset">
                            <p><?= $kaset["judul_kaset"]; ?></p>
                        </div>
                        <div class="btn-detail-kaset">
                            <a class="btn btn btn-info btn-sm" href="./php/detail.php?id=<?= $kaset["id"]; ?>">Lihat
                                Detail kaset</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>