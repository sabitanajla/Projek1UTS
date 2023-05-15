<?php 
    require_once 'dbkecantikan.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_pesanan.php" role="button">Create Pesanan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Pesanan</th>
                    <th>Tanggal</th>
                    <th>Nama Pemesanan</th>
                    <th>No Handphone</th>
                    <th>Jumlah Pesanan</th>
                    <th>Produk Id</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id_pesanan']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['nama_pemesan']?></td>
                        <td><?=$row['no_hp']?></td>
                        <td><?=$row['jumlah_pesanan']?></td>
                        <td><?=$row['produk_id']?></td>
                        <td>
                        <a class="btn btn-primary" href="view_pesanan.php?id=<?=$row['id_pesanan']?>">View</a>
                        <a class="btn btn-primary" href="edit_pesanan.php?idedit=<?=$row['id_pesanan']?>">Edit</a>
                        <a class="btn btn-primary" href="delete_pesanan.php?iddel=<?=$row['id_pesanan']?>"
                        onclick="if(!confirm('Anda Yakin Hapus Data pemesan <?=$row['nama_pemesan']?>?')) {return false}"
                        >Delete</a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
