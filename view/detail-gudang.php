<?php include_once 'header.php';?>
<style>

tbody {
	color: white;
}
thead {
	color: white;
}
</style>

    <div class="row justify-content-between" style="color: white;padding-left: 40px; background-color: #1f1c30">
        <div class="col-lg-6">  
           <br>   <div class="d-flex justify-content-between">
                    <h3>Daftar Gudang</h3>
                <div>
                    <a href="#" id="editarBtn" class="btn btn-outline-warning"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Edit</a>
                    <a href="index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Kembali</a>
                    <a href="index.php?controller=bodega&action=borrar&id=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Hapus</a>
                </div>
            </div>
            <hr/>
            <form action="index.php?controller=bodega&action=actualizar" method="post">
              <input type="hidden" name="id" value="<?php echo $datos["bodega"]->id ?>"/>
              <div class="form-group">
                <label for="nomor">nomor</label>
                <input disabled type="text" name="nomor" class="form-control" id="nomor" value="<?php echo $datos["bodega"]->nomor ?>">
              </div>

              <div class="form-group">
                <label for="alamat">alamat</label>
                <input disabled type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $datos['bodega']->alamat ?>">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input disabled type="email" name="email" class="form-control" id="email" value="<?php echo $datos['bodega']->email ?>">
              </div>
              
              <div class="form-group">
                <label for="telepon">telepon</label>
                <input disabled type="text" name="telepon" class="form-control" id="telepon" value="<?php echo $datos['bodega']->telepon ?>">
              </div>

              <div class="form-group">
                <label for="kontak">kontak person</label>
                <input disabled type="text" name="kontak" class="form-control" id="kontak" value="<?php echo $datos['bodega']->kontak ?>">
              </div>

              <div class="form-group">
                <label for="kapasitas">kapasitas</label>
                <input disabled type="text" name="kapasitas" class="form-control" id="kapasitas" value="<?php echo $datos['bodega']->kapasitas ?>">
              </div>
              <div>
              <fieldset class="form-group">
                <legend>mempunyai area pendingin?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="pendingin" id="pendingin" value="1" <?php echo $datos['bodega']->pendingin == 1 ? 'checked' : '' ?>>
                    Ya
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="pendingin" id="pendingin2" value="0" <?php echo $datos['bodega']->pendingin == 0 ? 'checked' : '' ?>>
                    Tidak
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>mempunyai area pemanas?</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="pemanas" id="pemanas" value="1" <?php echo $datos['bodega']->pemanas == 1 ? 'checked' : '' ?>>
                    Ya
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input disabled type="radio" class="form-check-input" name="pemanas" id="pemanas2" value="0" <?php echo $datos['bodega']->pemanas == 0 ? 'checked' : '' ?>>
                    Tidak
                  </label>
                </div>
              </fieldset>
              

              <button type="submit" class="btn btn-primary hide">Submit</button>
            </form>
			</div>
        </div> 
        <div class="col-6" style="padding-left: 20px; padding-right: 40px"> 
         <br><div class="d-flex justify-content-between">
                  <h3>Daftar Stok Gudang</h3>
              <div>
                  <a href="index.php?controller=vino&action=nuevo&bodega=<?php echo $datos['bodega']->id ?>" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Stok</a>
              </div>
          </div>
          <hr/>
          <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datos["vinos"] as $vino) { ?>
              <tr>
                <td>
                  <?php echo $vino["nama"]; ?>
                </td>
                <td>
                  <?php echo $vino["jenis"]; ?>
                </td>
                <td>
                  <a class="btn btn-outline-primary" href="index.php?controller=vino&action=detalle&id=<?php echo $vino['id']; ?>&bodega=<?php echo $datos["bodega"]->id ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Lihat</a>
                  <a class="btn btn-outline-danger" href="index.php?controller=vino&action=borrar&id=<?php echo $vino['id'] ?>&bodega=<?php echo $datos["bodega"]->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Hapus</a> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>  
        </div>  
    </div> 


<?php include_once 'footer.php';?>