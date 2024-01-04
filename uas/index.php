<?php
require 'config/koneksi.php';
// $servername = "localhost";
// $database = "db_uas";
// $username = "root";
// $password = "";

// $conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

$stmt = "SELECT * FROM `tb_produk`";
$result = $conn->query($stmt);

mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Baju </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img alt="COSJUY" src="https://marketplace.canva.com/EAE5uF-a8pY/1/0/1600w/canva-black-minimalist-modern-cool-clothing-apparel-logo-BnoCEsYFUW8.jpg" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-4 g-4">

<?php 
if ($result->num_rows > 0) { // kalo datanya ada
    while($row = $result->fetch_assoc()) {
    ?>
    <div class="col">
    <div class="card h-100">
    <img src="images/<?= $row["img"] ?>" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
      <p class="card-text"><?= $row['desc'] ?></p>
      <h6><?= "Harga: Rp " . number_format($row['harga'], 0, ',', '.') ?></h6>
      <h6><?= "Stok: " . $row['qty'] ?></h6><hr>
      <a href="#" class="btn btn-primary">Beli</a>
      
      </div>
    </div>
    </div>

    <?php }
}else { ?>
    <p>Tidak ada data</p>
<?php }?>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    

  </body>
</html>