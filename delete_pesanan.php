<?php 
require_once 'dbkecantikan.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM pesanan WHERE id_pesanan=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:list_pesanan.php');
?>