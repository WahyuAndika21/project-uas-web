<?php

if(isset($_POST['submit'])) 
{
	$nama = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$qty = $_POST['qty'];
    $desc = $_POST['desc'];              

    $uploadDir 	= "../images/"; 
    $gambarName = explode('.', $_FILES["img"]["name"]);
    $gambarName = uniqid() . '.' . end($gambarName);
    $gambarPath = $uploadDir . $gambarName;
    move_uploaded_file($_FILES["img"]["tmp_name"], $gambarPath); 

    $gambar = $gambarName;

	$result = mysqli_query($conn, "INSERT INTO tb_produk (`id`, `nama_produk`, `harga`, `qty`, `desc`, `img`) VALUES (NULL, '$nama','$harga', '$qty', '$desc', '$gambar')");
    
	header("Location: index.php?page=produk");
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_produk">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="qty">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="formFile" name="img">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>