<?php include_once 'header.php';?>

        <div class="thin-panel" style="color: white; padding-left: 40px; padding-right: 640px; background-color: #1f1c30">
            <br><div class="d-flex justify-content-between">
                <div>
                    <h3>Tambah Data Gudang</h3>
                </div>
                <div>
                    <a href="index.php" class="btn btn-info">Kembali</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=bodega&action=alta" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["id"] ?>"/>
              <div class="form-group">
                <label for="nomor">nomor</label>
                <input type="text" name="nomor" class="form-control" id="nomor" placeholder="nomor">
              </div>

              <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              
              <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="telepon">
              </div>

              <div class="form-group">
                <label for="kontak">Nama Pemilik</label>
                <input type="text" name="kontak" class="form-control" id="kontak" placeholder="Nama Pemilik Gudang">
              </div>

              <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Kapasitas Gudang (barang)">
              </div>

              <div class="form-group">
                <label for="exampleTextarea">Penjelasan Gudang</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              
              <fieldset class="form-group">
                <legend>mempunyai area pendingin?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pendingin" id="pendingin" value="1">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pendingin" id="pendingin2" value="0" checked>
                    Tidak
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>mempunyai area pemanas?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pemanas" id="pemanas" value="1">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="pemanas" id="pemanas2" value="0" checked>
                    Tidak
                  </label>
                </div>
              </fieldset>
              

              <button type="submit" class="btn btn-primary">Submit Data</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>