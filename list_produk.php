<?php 
    require_once 'dbkecantikan.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Produk</th>
                    <th>Tipe Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama_produk']?></td>
                        <td><?=$row['tipe']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                        <a class="btn btn-primary" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
                        onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama_produk']?>?')) {return false}"
                        >Delete</a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
