 <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
    require 'functions.php';

    $id = $_GET['id'];

    if(hapus($id) > 0) {
        echo "<script>
            alert('Data Berhasil dihapus');
            document.location.href = 'admin.php';        
            </script>";
    } else {
        echo "<script>
            alert('Data Gagal dihapus');
            document.location.href = 'admin.php';        
            </script>";
    }
?>