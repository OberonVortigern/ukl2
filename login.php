<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username==""||$password==""){
    echo "<script>alert('username/password kosong');location.href= 'index.php';</script>";
    // header('location:form-login.php);
}else{
    $pass = md5($password);
    $query = "select * from admin where username ='$username' and password = '$pass'";
    // echo $query;
    $result=mysqli_query($koneksi,$query);
    $num=mysqli_num_rows($result);
    if($num >= 1){
        $data=mysqli_fetch_array($result);
        $_SESSION['username']=$username;
        $_SESSION['level']=$data['role'];
        $_SESSION['status']="login";
        if($_SESSION['level']=='admin'){
            header("location:admin/index.php");
            echo "ini admin";
        }else if($_SESSION['level']=='kasir'){
            header("location:admin/transaksi.php");
        }else if($_SESSION['level']=='owner'){
            header("location:admin/laporan.php");
    }else{
        // echo "<script>alert('username/password salah');location.href= 'index.php';</script>";
        // header("location:index.php");
    }
}
}
?>