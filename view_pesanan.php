<?php 
require_once 'dbkecantikan.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pesanan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pesanan a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id_pesanan=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td>:</td><td><?=$row['id_pesanan']?></td></tr>
        <tr><td>Tanggal</td><td>:</td><td><?=$row['tanggal']?></td></tr>
        <tr><td>Nama Pemesan</td><td>:</td><td><?=$row['nama_pemesan']?></td></tr>
        <tr><td>No Handphone</td><td>:</td><td><?=$row['no_hp']?></td></tr>
        <tr><td>Jumlah Pesanan</td><td>:</td><td><?=$row['jumlah_pesanan']?></td></tr>
        <tr><td>Produk</td><td>:</td><td><?=$row['produk_id']?></td></tr>
    </tbody>
</table>