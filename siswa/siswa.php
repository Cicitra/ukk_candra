<?php
session_start();
if($_SESSION['nisn']){
    echo"<script>alert('Maaf Anda Belum Login'); 
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Siswa - Pembayaran SPP</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
     
    <h3>Aplikasi Pembayaran SPP</h3>
    <div class="alert alert-info">
        Anda Login Sebagai Siswa <b><?= $_SESSION['nama']?></b>Aplikasi Pembayaran SPP.
    </div>
    <a href="siswa.php" class="btn btn-primary">Siswa</a>
    <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if (empty($file)){
                echo"<h4>Selamat Datang di Halaman Siswa</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di Sekolah.";
                echo"<hr>";
                include 'history.pembayaran.php';
            } else {
                include $file.'.php';
            }
            ?>
        </div>
    </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>