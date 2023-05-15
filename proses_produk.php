<?php 
require_once 'dbkecantikan.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];
   $_tipe = $_POST['tipe'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_tipe; // ? 7
   $ar_data[]=$_stok;// 3
   $ar_data[]=$_harga;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,nama_produk,tipe,stok,harga) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET id=?,nama_produk=?,tipe=?,stok=?,harga=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_produk.php');
?>