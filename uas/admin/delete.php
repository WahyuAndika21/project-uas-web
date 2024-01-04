<?php
	$id = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM tb_produk WHERE id=$id");
	header("Location:index.php?page=produk");
?>