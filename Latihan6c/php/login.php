 <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil user berdasarkan id
    $result = mysqli_query(koneksi_db(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] =  $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// melakukan Pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Locaton: admin.php");
    exit;
}
//login
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(Koneksi_db(),"SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME DAN PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
            if(hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html>
<title>Masuk Ke Halaman Login</title>	
<head>
	 <style type="text/css">
      body {background-color:#0054FC;}
      h3 {color:red;}
      td {color: green;}
      td {font-family: arial;}
      h3 {font-family: arial;}
      div {
	background: #3368FF;
	font-family: arial;
	color: white;
	font-size: 11pt;
	width: 10%;	
	border: none;
	border-radius: 3px;
	padding: 10px 20px;}
	button{
	background: #3368FF;
	color: black;
	font-family: arial;
	font-size: 11pt;
	width: 10%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;}
	h3{
	background :#3368FF;
	color: white;
	font-size: 10pt;
	column-width: : 100%;	
	width: 10;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;}
	td{background :#3368FF;
	color: white;
	font-size: 11pt;
	width: 10%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;}
   </style>
</head>
<center>
<br>
<body>

	<br>
	<br>
	<h3> Masuk Ke Halaman Login</h3>
	<form action="" method="post">
		<?php if (isset($error)): ?>
			<p style="color: red; font-style: italic;">Username atau password salah</p>
		<?php endif; ?>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<div class="remember">
			<input type="checkbox" name="remember">
			<label for="remember">Remember Me</label>			
		</div>
		<button type="sumbit" name="sumbit">Login</button>
	</form>
</body>
</br>
</center>
</html>

