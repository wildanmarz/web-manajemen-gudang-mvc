<?php include_once 'header.php';?>

        <div class="thin-panel" style="color: white; padding-left: 40px; padding-right: 440px; background-color: #1f1c30">
            <br><div class="d-flex justify-content-between">
                <div>
                    <h3>Detail Barang</h3>
                </div>
                <div>
                    <?php
                      $volverURL = "index.php?controller=bodega&action=detalle&id=" . $data['bodega'];
                      $borrarURL = "index.php?controller=bodega&action=borrar&id=" . $datos['vino']->id . "&bodega=" . $data['bodega'];
                    ?>
                    <a href="#" id="editarBtn" class="btn btn-outline-warning"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;&nbsp;Edit</a>
                    <a href="<?php echo $volverURL ?>" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Kembali</a>
                    <a class="btn btn-outline-danger" href="<?php echo $borrarURL ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Hapus</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=vino&action=actualizar" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["vino"]->id ?>"/>
              <input type="hidden" name="bodega" value="<?php echo $datos["bodega"] ?>"/>
              
              <div class="form-group">
                <label for="nama">nama</label>
                <input disabled type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['vino']->nama ?>">
              </div>

              <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <textarea disabled class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo $datos['vino']->deskripsi ?></textarea>
              </div>

              <div class="form-group">
                <label for="expired">Tgl Expired</label>
                <input  disabled type="text" name="expired" class="form-control" id="expired" value="<?php echo $data['vino']->expired ?>">
              </div>

              <div class="form-group">
                <label for="berat">berat (gram)</label>
                <input disabled type="text" name="berat" class="form-control" id="berat" value="<?php echo $data['vino']->berat ?>">
              </div>

              <div class="form-group">
                <label for="jenis">jenis barang</label>
                <select disabled class="form-control" id="jenis" name="jenis">
                  <option value="padat" <?php echo $data['vino']->jenis == 'padat'? 'selected' : '' ?>>padat</option>
                  <option value="cair" <?php echo $data['vino']->jenis == 'cair'? 'selected' : '' ?>>cair</option>
                  <option value="gas" <?php echo $data['vino']->jenis == 'gas'? 'selected' : '' ?>>gas</option>
                </select>
              </div>
              

              <button disabled type="submit" class="btn btn-primary">Perbarui Data Barang</button>
            </form>
        </div>    





<?php include_once 'footer.php';?>

