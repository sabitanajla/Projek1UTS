<?php 
require_once 'dbkecantikan.php';
?>
<?php 
   $_id = $_POST['id'];
   $_tgl = $_POST['tgl'];
   $_np = $_POST['np'];
   $_no = $_POST['no'];
   $_jml = $_POST['jml'];
   $_produk = $_POST['produk'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_tgl; // ? 2
   $ar_data[]=$_np; // ? 7
   $ar_data[]=$_no;// 3
   $ar_data[]=$_jml;
   $ar_data[]=$_produk;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id_pesanan,tanggal,nama_pemesan,no_hp,jumlah_pesanan, produk_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id_pesanan=?,tanggal=?,nama_pemesan=?,no_hp=?,jumlah_pesanan=?,produk_id=? WHERE id_pesanan=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_pesanan.php');
?>