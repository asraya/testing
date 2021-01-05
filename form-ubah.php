 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data siswa
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $no_barang   = $_GET['id'];
        $query = mysqli_query($db, "SELECT * FROM spare WHERE no_barang='$no_barang'") or die('Query Error : '.mysqli_error($db));
        while ($data  = mysqli_fetch_assoc($query)) {
          $no_barang           = $data['no_barang'];
          $nama_sparepart          = $data['nama_sparepart'];
          
          $tanggal       = $data['tanggal_masuk_barang'];
          $tgl           = explode('-',$tanggal);
          $tanggal_masuk_barang = $tgl[2]."-".$tgl[1]."-".$tgl[0];
          
          $ketersediaan_barang = $data['ketersediaan_barang'];
          $kondisi         = $data['kondisi'];
        
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">no barang</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_barang" value="<?php echo $no_barang; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">nama sparepart</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_sparepart" autocomplete="off" value="<?php echo $nama_sparepart; ?>" required>
              </div>
            </div>
   

            <div class="form-group">
              <label class="col-sm-2 control-label">tanggal masuk barang</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_masuk_barang" autocomplete="off" value="<?php echo $tanggal_masuk_barang; ?>" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
              <?php
              if ($ketersediaan_barang=='Ready') { ?>
                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Ready" checked> Ready
                </label>

                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Kosong"> Kosong
                </label>
              <?php
              } else { ?>
                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Ready"> Ready
                </label>

                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Kosong" checked> Kosong
                </label>
              <?php
              }
              ?>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">kondisi</label>
              <div class="col-sm-3">
                <select class="form-control" name="kondisi" placeholder="Pilih kondisi" required>
                  <option value="<?php echo $kondisi; ?>"><?php echo $kondisi; ?></option>
                  <option value=""></option>
                  <option value="baru">baru</option>
                  <option value="bekas">bekas</option>
                  
                </select>
              </div>
            </div>

            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->