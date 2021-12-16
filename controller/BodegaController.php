<?php
class BodegaController{

    private $conectar;
    private $conexion;

    public function __construct() {
		require_once  __DIR__ . "/../core/koneksi.php";
        require_once  __DIR__ . "/../model/simpan.php";
        require_once  __DIR__ . "/../model/edit.php";
        
        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

    }


    public function run($accion){
        switch($accion)
        { 
            case "index" :
                $this->index();
                break;
            case "nueva" :
                $this->nueva();
                break;
            case "alta" :
                $this->crear();
                break;
            case "detalle" :
                $this->detalle();
                break;
            case "actualizar" :
                $this->actualizar();
                break;
            case "borrar" :
                $this->borrar();
                break;
            default:
                $this->index();
                break;
        }
    }
    
 
    public function index(){
        
        $bodega=new Bodega($this->conexion);
        
        $bodegas=$bodega->getAll();
       
        $this->view("index",array(
            "bodegas"=>$bodegas,
            "titulo" => "PHP MVC "
        ));
    }

   
    public function detalle(){
        
        $bodega= new Bodega($this->conexion);
        $bodega = $bodega->getById($_GET["id"]);

        $vino = new Vino($this->conexion);
        $vinos = $vino->getAllByBodega($_GET["id"]);

        $this->view("detail-gudang",array(
            "bodega" => $bodega,
            "vinos" => $vinos
        ));
    }

    public function nueva(){
        $this->view("tambah-gudang",array(
            
        ));
    }

    public function borrar(){
        
        $bodega=new Bodega($this->conexion);
        $bodega = $bodega->deleteById($_GET["id"]);
        
        $this->run("index");
    }
    
  
    public function crear(){
        if(isset($_POST["nomor"])){
            
            $bodega=new Bodega($this->conexion);
            $bodega->setnomor($_POST["nomor"]);
            $bodega->setalamat($_POST["alamat"]);
            $bodega->setEmail($_POST["email"]);
            $bodega->settelepon($_POST["telepon"]);
            $bodega->setkontak($_POST["kontak"]);
            $bodega->setkapasitas($_POST["kapasitas"]);
            $bodega->setpendingin($_POST["pendingin"]);
            $bodega->setpemanas($_POST["pemanas"]);
            $save=$bodega->guardar();
        }
        $this->run("index");
    }

   
    public function actualizar(){
        if(isset($_POST["id"])){
            
            //Creamos una bodega
            $bodega=new Bodega($this->conexion);
            $bodega->setId($_POST["id"]);
            $bodega->setnomor($_POST["nomor"]);
            $bodega->setalamat($_POST["alamat"]);
            $bodega->setEmail($_POST["email"]);
            $bodega->settelepon($_POST["telepon"]);
            $bodega->setkontak($_POST["kontak"]);
            $bodega->setkapasitas($_POST["kapasitas"]);
            $bodega->setpendingin($_POST["pendingin"]);
            $bodega->setpemanas($_POST["pemanas"]);
            $save=$bodega->actualizar();
        }
        header("Location: index.php?controller=bodega&action=detalle&id=" . $_POST["id"]);
    }
    
    
    public function view($vista,$datos){
        $data = $datos;  
        require_once  __DIR__ . "/../view/" . $vista . ".php";

    }

}
?>
