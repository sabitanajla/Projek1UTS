<?php 
require_once 'dbkecantikan.php';
?>
            
<form method="POST" action="proses_pesanan.php">
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tgl" name="tgl" type="date" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="np" class="col-4 col-form-label">Nama Pemesan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="np" name="np" value=""
        type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="no" class="col-4 col-form-label">No Handphone</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="no" name="no" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jml" class="col-4 col-form-label">Jumlah Pesanan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="jml" name="jml" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM  produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="produk" name="produk" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama_produk']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Skincare</option>
        <option value="2">Bodycare</option>
        <option value="3">Make up</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
