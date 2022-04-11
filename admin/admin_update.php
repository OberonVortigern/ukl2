<?php
include '../koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];
mysqli_query($koneksi,"update admin set username='$username', password='$password', role='$role' where id='$id'");
header("location:admin.php");
?>
