 <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','pw_tubes_203040092'); 
?>
<?php
    $no =1;
	   $query = $_POST['query'];
	       if ($query != ''){
	          $Select = mysqli_query($conn, "SELECT * FROM daftar_kaset WHERE  Judul_kaset LIKE '" $query"'");
	       }else{ 
	          $Select = mysqli_query($conn, "SELECT * FROM daftar_kaset");
	       }
	       foreach ($baris =mysqli_fetch_array($Select)){
	       ?>
	       <tr>
	         <td><?php  echo $no++ ?></td>
	         <td><?php echo $baris['Opsi'] ?></td>
	         <td><?php echo $baris['Judul_kaset'] ?></td>
	         <td><?php echo $baris['rilis_kaset'] ?></td>
	         <td><?php echo $baris['stock_kaset'] ?></td>
             <td><?php echo $baris['harga'] ?></td>
	        </tr>
 <?php } ?> 
 <?php
    require 'functions.php';

    $id = $_GET['id'];

    if(hapus($id) > 0) {
        echo "<script>
            alert('Data Berhasil dicari');
            document.location.href = 'admin.php';        
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal DI cari');
            document.location.href = 'admin.php';        
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/cari.css?v2" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css?v2" />
    <title>Cari Data Kaset</title>
</head>

<body>
    <h1>Form cari Data Kaset</h1>

    <form>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="cari">cari Data!</button>
            <button class="btn btn-secondary btn-lg btn-block">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>
</body>

</html>