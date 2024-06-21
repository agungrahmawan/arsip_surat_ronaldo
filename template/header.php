<?php
    include 'config/db.php';
    $sqllogo = mysqli_query($conn, "SELECT * FROM tb_instansi WHERE id_instansi='1'");
    $s = mysqli_fetch_assoc($sqllogo);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Agung">
    <link href="assets/logo/<?= $s['logo'] ?>" rel="shortcut icon">

    <title>Arsip Surat</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/01784279a5.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ARSIP SURAT <sup>Baldes Jati Wetan</sup></div>
            </a>