<?php include_once 'header.php';?>
<style>
		th {
	color: white;
	text-align: center;
}
tbody {
	color: white;
	text-align: center;
}
p {
	color: white;
	text-align: center;
}
h1 {
	font-size: 22px;
	color: white;
	text-align: center;
}
</style>
    <body style="background-color: #1f1c30">
	<br>
	<h1>Selamat Datang Di aplikasi Management Pergudangan Berbasis Website</h1>
	<p><img src="./assets/gudang.jpg" width="480" height="250" class="d-inline-block align-top"></img></p>
	<p>Aplikasi Manajemen Pergudangan Yang Dapat Mempermudah Anda Untuk Memanajemen Gudang Dan Stock Barang</p>
	<p>Di Buat Dengan Bahasa PHP Dengan Menerapkan MVC</p>
        <div class="container">
		
          <a class="btn btn-primary btn-nueva" href="index.php?controller=bodega&action=nueva"><i class="fa fa-plus"></i>&nbsp;Tambah Gudang                                 </a>
          <table class="table table-bordered grocery-crud-table table-hover">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Alamat Gudang</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($datos["bodegas"] as $bodega) { ?>
              <tr>
                <td>
                  <?php echo $bodega["nomor"]."."; ?>
                </td>
                <td>
                  <?php echo $bodega["alamat"]; ?>
                </td>
                <td>
                  <?php echo $bodega["telepon"]; ?>
                </td>
                <td>
                  <?php echo $bodega["email"]; ?>
                </td>
                <td>
                  <a class="btn btn-outline-primary" href="index.php?controller=bodega&action=detalle&id=<?php echo $bodega['id']; ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Masuk</a>
                  <a class="btn btn-outline-danger" href="index.php?controller=bodega&action=borrar&id=<?php echo $bodega['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Hapus</a> </td>

              </tr>
              <?php } ?>
            </tbody>
          </table>

          <?php include_once 'footer.php';?>


