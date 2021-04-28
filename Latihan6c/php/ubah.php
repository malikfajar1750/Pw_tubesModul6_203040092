 <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("location: login.php");
        exit;
    }
    require 'functions.php';

    if(isset($_POST["ubah"])) {
        var_dump($_POST); die;

        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
        </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/ubah.css?v2" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css?v2" />
    <title>Ubah Data Kaset</title>
</head>

<body>
    <h1>Form Ubah Data Kaset</h1>

    <form>
        <input type="hidden" name="id" id="id" value="<?= $kaset['id']; ?>">
        <input type="file" class="form-control-file " name="gambar" id="gambar" required>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div>
                <input type="file" class="form-control-file " name="gambar" id="gambar" required>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="judul-buku">Judul kaset</label>
            <div>
                <input type="text" class="form-control" name="judul_buku" id="judul-buku" required>
            </div>
        </div>
        <div class="form-group">
            <label for="rilis-kaset">rilis kaset</label>
            <div>
                <textarea class="form-control input-textarea" name="deskripsi" id="desk" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="stock-kaset">stock kaset</label>
            <div>
                <input type="text" class="form-control" name="penulis" id="penulis" required>
            </div>
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <div>
                <input type="number" class="form-control" name="tahun_terbit" id="tahun-terbit" required>
            </div>
        </div>
        <div class="form-btn">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="ubah">ubah Data!</button>
            <button class="btn btn-secondary btn-lg btn-block">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
                <input type="text" name="nama"  id="nama" required value="<?=$kaset['nama']; ?>">
        </div>

    </form>
</body>

</html>