<?php
if(isset($_REQUEST['id']))
{ 
	$id = $_REQUEST['id'];

	$result = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id=$id");
    
    while($data = mysqli_fetch_array($result))
	{
		$defNamaProduk  = $data['nama_produk'];
		$defHarga  		= $data['harga'];
		$defQty  	    = $data['id'];
        $defDesc        = $data['desc'];
        $defImg         = $data['img'];
	}
}
if(isset($_POST['submit'])) 
{
	$nama = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$qty = $_POST['qty'];
    $desc = $_POST['desc'];       
    $gambar = '';
    
    if ($_FILES['img']) {
        $uploadDir 	= "../images/"; 
        $gambarName = explode('.', $_FILES["img"]["name"]);
        $gambarName = uniqid() . '.' . end($gambarName);
        $gambarPath = $uploadDir . $gambarName;
        move_uploaded_file($_FILES["img"]["tmp_name"], $gambarPath);
        $gambar = $gambarName;
    }

    $gambar = $defImg;

	$results = mysqli_query($conn, "UPDATE tb_produk SET `nama_produk`='$nama', `harga`='$harga', `qty`='$qty', `desc`='$desc', `img`='$gambar' WHERE id='$id' ");
    
	header("Location: index.php?page=produk");
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_produk" value="<?= $defNamaProduk ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="<?= $defHarga ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="qty" value="<?= $defQty ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"><?= $defDesc ?></textarea>
    </div>
    <img src="../images/<?=$defImg ?>" alt="" width="100">
    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="formFile" name="img">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>