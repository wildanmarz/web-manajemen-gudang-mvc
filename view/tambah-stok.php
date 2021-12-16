<?php include_once 'header.php';?>

        <div class="thin-panel" style="color: white; padding-left: 40px; padding-right: 440px; background-color: #1f1c30">
           <br> <div class="d-flex justify-content-between">
                <div>
                    <h3>Stok Gudang</h3>
                </div>
                <div>
                    <a href="index.php" class="btn btn-info">Kembali</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=vino&action=alta" method="post">
              <input type="hidden" name="bodega" value="<?php echo $datos["bodega"] ?>"/>
              <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi Barang</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="expired">Tgl Expired</label>
                <input type="text" name="expired" class="form-control" id="expired" placeholder="Tanggal Expired">
              </div>

              <div class="form-group">
                <label for="berat">Berat (gram)</label>
                <input type="text" name="berat" class="form-control" id="berat" placeholder="Tulis Berat dalam Gram">
              </div>

              <div class="form-group">
                <label for="jenis">Jenis Barang</label>
                <select class="form-control" id="jenis" name="jenis">
                  <option value="padat">padat</option>
                  <option value="cair">cair</option>
                  <option value="gas">gas</option>
                </select>
              </div>
              

              <button type="submit" class="btn btn-primary">Submit Data</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>