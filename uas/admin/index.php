<?php
require '../config/koneksi.php';
session_start();
// if($_SESSION['role'] != "admin")
// {
//     header("location:../index.php");
// }

$stmt  	= "SELECT * FROM tb_produk";
$select = mysqli_query($conn,$stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
       html, body {
        height: 100%;
    }
</style>
</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img alt="COSJUY" src="https://marketplace.canva.com/EAE5uF-a8pY/1/0/1600w/canva-black-minimalist-modern-cool-clothing-apparel-logo-BnoCEsYFUW8.jpg" width="100"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tambah">Tambah</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container flex-grow-1" id="content">
        <div class="row h-100">
            <div class="col p-3 h-100">
                <div class="p-3">
                    <?php
                    include "../config/koneksi.php"; 
                    $halaman = isset($_GET['page']) ? $_GET['page'] : 'produk';

                    switch ($halaman) {
                        case 'tambah':
                            include('add.php'); 
                            break;
                        case 'update':
                            include('update.php'); 
                            break;
                        case 'delete':
                            include('delete.php'); 
                            break;
                        default:
                            include('produk.php');
                            break;
                    }
                    ?>     
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white p-3" >
        <a>&copy; 2023</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
