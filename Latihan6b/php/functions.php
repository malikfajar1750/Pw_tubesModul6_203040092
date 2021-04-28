 <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
    //melakukan koneksi ke database
    function koneksi_db() {
        $conn = mysqli_connect ("localhost", "root", "");
        mysqli_select_db ($conn, "pw_tubes_203040092");

        return $conn;
    }

    // melakukan query dan memasukkan ke dalam array
    function query($sql) {
        $conn = koneksi_db();
        $result = mysqli_query($conn, "$sql");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    function tambah($data) {
        $conn = koneksi_db();

        $gambar = htmlspecialchars($data['gambar']);
        $judul_buku = htmlspecialchars($data['judul_kaset']);
        $rilis_kaset = htmlspecialchars($data['rilis_kaset']);
        $stock_kaset = htmlspecialchars($data['stock_kaset']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO daftar_buku VALUES
                    ('', '$gambar', '$judul_kaset', '$rilis_kaset', '$stock_kaset', '$harga')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    function hapus($id) {
        $conn = koneksi_db();
        mysqli_query($conn, "DELETE FROM daftar_kaset WHERE daftar_kaset = $daftar_kaset");

        return mysqli_affected_rows($conn);
    }
    // function registrasi
    function registrasi($data) {
        $conn = koneksi_db();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('username sudah digunakan');
                </script>";
            return false;
        
        }
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambah user baru
        $query_tambah = "INSERT INTO user VALUES('', '$username', 'password')";
        mysqli_query($conn, $query_tambah);
        return mysqli_affected_rows($conn);
    }
?>