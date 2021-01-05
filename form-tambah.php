
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input Data sparepart
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">no barang</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_barang" maxlength="5" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">nama sparepart</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_sparepart" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal masuk barang</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_masuk_barang" autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">ketersediaan barang</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Ready"> Ready
                </label>

                <label class="radio-inline">
                  <input type="radio" name="ketersediaan_barang" value="Kosong"> kosong
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">kondisi</label>
              <div class="col-sm-3">
                <select class="form-control" name="kondisi" placeholder="Pilih kondisi" required>
                  <option value=""></option>
                  <option value="baru">barus</option>
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