<?php
require_once  __DIR__ . "/GenericModel.php";

class Vino extends GenericModel{
    

    private $nama;
    private $bodega;
    private $deskripsi;
    private $expired;
    private $jenis;
    private $berat;

    public function __construct($conexion) {
		parent::__construct($conexion);
        $this->table = TABLE_VINOS;
    }

    
    public function getnama() {
        return $this->nama;
    }

    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function getBodega() {
        return $this->bodega;
    }

    public function setBodega($bodega) {
        $this->bodega = $bodega;
    }

    public function getdeskripsi() {
        return $this->deskripsi;
    }

    public function setdeskripsi($deskripsi) {
        $this->deskripsi = $deskripsi;
    }

    public function getexpired() {
        return $this->expired;
    }

    public function setexpired($expired) {
        $this->expired = $expired;
    }

    public function getjenis() {
        return $this->jenis;
    }

    public function setjenis($jenis) {
        $this->jenis = $jenis;
    }

    public function getberat() {
        return $this->berat;
    }

    public function setberat($berat) {
        $this->berat = $berat;
    }

    public function getAllByBodega($id) {
        return $this->getByColumn("bodega",$id);
    }

    public function guardar(){

        $consulta = $this->conexion->prepare("INSERT INTO " . $this->table . " (nama, bodega, deskripsi, jenis, expired, berat)
                                        VALUES (:nama, :bodega, :deskripsi, :jenis, :expired, :berat)");
        $result = $consulta->execute(array(
            "nama" => $this->nama,
            "bodega" => $this->bodega,
            "deskripsi" => $this->deskripsi,
            "jenis" => $this->jenis,
            "expired" => $this->expired,
            "berat" => $this->berat
        ));
        $this->conexion = null;

        return $result; //true if OK.
    }

    public function actualizar(){

        $consulta = $this->conexion->prepare("
            UPDATE " . $this->table . " 
            SET 
                nama = :nama,
                bodega = :bodega, 
                deskripsi = :deskripsi,
                jenis = :jenis,
                expired = :expired,
                berat = :berat

            WHERE id = :id 
        ");

        $resultado = $consulta->execute(array(
            "nama" => $this->nama,
            "bodega" => $this->bodega,
            "deskripsi" => $this->deskripsi,
            "jenis" => $this->jenis,
            "expired" => $this->expired,
            "berat" => $this->berat,
            "id" => $this->id
        ));
        $this->conexion = null;

        return $resultado; //true if OK.
    }
        
    
    
    
}
?>
