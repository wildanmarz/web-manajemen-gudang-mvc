<?php
require_once  __DIR__ . "/GenericModel.php";

class Bodega extends GenericModel{
    

    private $nomor;
    private $alamat;
    private $email;
    private $telepon;
    private $kontak;
    private $kapasitas;
    private $pendingin;
    private $pemanas;

    public function __construct($conexion) {
		parent::__construct($conexion);
        $this->table = TABLE_BODEGAS;
    }

    
    public function getnomor() {
        return $this->nomor;
    }

    public function setnomor($nomor) {
        $this->nomor = $nomor;
    }

    public function getalamat() {
        return $this->alamat;
    }

    public function setalamat($alamat) {
        $this->alamat = $alamat;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function gettelepon() {
        return $this->telepon;
    }

    public function settelepon($telepon) {
        $this->telepon = $telepon;
    }

    public function getkontak() {
        return $this->kontak;
    }

    public function setkontak($kontak) {
        $this->kontak = $kontak;
    }

    public function getkapasitas() {
        return $this->kapasitas;
    }

    public function setkapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    public function ispendingin() {
        return $this->pendingin;
    }

    public function setpendingin($pendingin) {
        $this->pendingin = $pendingin;
    }

    public function ispemanas() {
        return $this->pemanas;
    }

    public function setpemanas($pemanas) {
        $this->pemanas = $pemanas;
    }

    public function guardar(){

        $consulta = $this->conexion->prepare("INSERT INTO " . $this->table . " (nomor,alamat,email,telepon, kontak, kapasitas, pendingin, pemanas)
                                        VALUES (:nomor,:alamat,:email,:telepon, :kontak, :kapasitas, :pendingin, :pemanas)");
        $result = $consulta->execute(array(
            "nomor" => $this->nomor,
            "alamat" => $this->alamat,
            "email" => $this->email,
            "telepon" => $this->telepon,
            "kontak" => $this->kontak,
            "kapasitas" => $this->kapasitas,
            "pendingin" => $this->pendingin,
            "pemanas" => $this->pemanas
        ));
        $this->conexion = null;

        return $result; //true if OK.
    }

    public function actualizar(){

        $consulta = $this->conexion->prepare("
            UPDATE " . $this->table . "  
            SET 
                nomor = :nomor,  
                alamat = :alamat,  
                email = :email, 
                telepon = :telepon, 
                kontak = :kontak, 
                kapasitas = :telepon, 
                pendingin = :pendingin, 
                pemanas = :pemanas 

            WHERE id = :id 
        ");

        $resultado = $consulta->execute(array(
            "nomor" => $this->nomor,
            "alamat" => $this->alamat,
            "email" => $this->email,
            "telepon" => $this->telepon,
            "kontak" => $this->kontak,
            "kapasitas" => $this->kapasitas,
            "pendingin" => $this->pendingin,
            "pemanas" => $this->pemanas, 
            "id" => $this->id
        ));
        $this->conexion = null;

        return $resultado; //true if OK.
    }
        
    
    
    
}
?>
