<?php
include '../koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];
mysqli_query($koneksi,"insert into admin values('','$username','$password','$role')");
header("location:admin.php");
?>