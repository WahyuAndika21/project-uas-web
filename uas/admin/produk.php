<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $stmt   	= "SELECT * FROM tb_produk";
        $select = mysqli_query($conn,$stmt);

        while($data= mysqli_fetch_array($select)){

    ?>
        <tr>
            <th scope="row"><?= $data['id'] ?></th>
            <td><?= $data['nama_produk'] ?></td>
            <td><?= $data['harga'] ?></td>
            <td>
                <a href="index.php?page=update&id=<?php echo $data['id']; ?>"><button class="btn btn-dark btn-sm" type="button">edit</button></a>
                <a href="index.php?page=delete&id=<?php echo $data['id']; ?>"><button class="btn btn-dark btn-sm" type="button">delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
