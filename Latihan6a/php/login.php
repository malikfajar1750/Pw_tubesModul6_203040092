  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php
session_start();
require 'functions.php';
// 
if (isset($_SESSION['Username'])){
	header("Location: admin.php");
	exit;
}
// login
if (isset($_POST['sumbit'])){
	$Username =$_POST ['Username'];
	$password =$_POST ['password'];
	 $cek_user = mysqli_query(Koneksi_db(),"SELECT * FROM user WHERE Username = '$Username'");
    // mencocokan USERNAME DAN PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['Username'] = $_POST['Username'];
            $_SESSION['hash'] = $row['id'];
        }
        if($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
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
	<h3>Login</h3>
	<form action="admin.php" method="post">
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
		<br>
		<div class="remember">
			<input type="checkbox" name="remember">
			<label for="remember">Remember Me</label>			
		</div>
		<br>

		<button type="sumbit" name="sumbit">Login</button>
		<br>
		<br>
		<div class="registrasi">
			<p>Belum punya akun ? registrasi <a href="registrasi.php">Disni	</a></p>		
		</div>
	</form>
</body>
</center>
</html>
