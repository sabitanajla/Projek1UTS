<?php 
require_once 'dbkecantikan.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td>:</td><td><?=$row['id']?></td></tr>
        <tr><td>Nama Produk</td><td>:</td><td><?=$row['nama_produk']?></td></tr>
        <tr><td>Tipe Produk</td><td>:</td><td><?=$row['tipe']?></td></tr>
        <tr><td>Stok</td><td>:</td><td><?=$row['stok']?></td></tr>
        <tr><td>Harga</td><td>:</td><td><?=$row['harga']?></td></tr>
    </tbody>
</table>
