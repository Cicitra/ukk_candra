<?php
session_start();
if($_SESSION['level']!='petugas'){
    echo"<script>alert('Maaf Anda Bukan Sesi Petugas'); 
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['id_petugas']){
    echo"<script>alert('Maaf Anda Belum Login'); 
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin - Pembayaran SPP</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mt-5">
     
    <h3>Aplikasi Pembayaran SPP</h3>
    <div class="alert alert-info">
        Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas']?></b> Aplikasi Pembayaran SPP.
    </div>
    <a href="petugas.php" class="btn btn-primary">Petugas</a>
    <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if (empty($file)){
                echo"<h4>Selamat Datang di Halaman Petugas</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di Sekolah.";
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