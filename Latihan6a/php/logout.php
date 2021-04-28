  <!-- 
    Malik Fajar
    203040092
    Praktikum Web Programming, Kamis jam 8
 -->
<?php 
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>