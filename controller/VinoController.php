<?php
class VinoController{

    private $conectar;
    private $conexion;

    public function __construct() {
		require_once  __DIR__ . "/../core/koneksi.php";
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
            case "nuevo" :
                $this->nuevo();
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

 
    public function detalle(){


        $vino = new Vino($this->conexion);
        $result = $vino ->getById($_GET["id"]);
        
        $this->view("edit-detail",array(
            "vino" => $result,
            "bodega" => $_GET["bodega"]
        ));
    }

    public function nuevo(){
        $this->view("tambah-stok",array(
            "bodega" => $_GET["bodega"]
        ));
    }

    public function borrar(){
        
        $vino = new Vino($this->conexion);
        $vino = $vino->deleteById($_GET["id"]);
        
        header("Location: index.php?controller=bodega&action=detalle&id=" . $_GET["bodega"]);
    }

    public function crear(){
        if(isset($_POST["nama"])){
            
            //Creamos una bodega
            $vino=new Vino($this->conexion);
            $vino->setnama($_POST["nama"]);
            $vino->setdeskripsi($_POST["deskripsi"]);
            $vino->setBodega($_POST["bodega"]);
            $vino->setjenis($_POST["jenis"]);
            $vino->setexpired($_POST["expired"]);
            $vino->setberat($_POST["berat"]);

            $save = $vino->guardar();
        }
        header("Location:index.php?controller=bodega&action=detalle&id=".$_POST["bodega"]);
    }

    public function actualizar(){
        if(isset($_POST["id"])){
            
            //Creamos un vino
            $vino=new Vino($this->conexion);
            $vino->setId($_POST["id"]);
            $vino->setnama($_POST["nama"]);
            $vino->setdeskripsi($_POST["deskripsi"]);
            $vino->setBodega($_POST["bodega"]);
            $vino->setjenis($_POST["jenis"]);
            $vino->setexpired($_POST["expired"]);
            $vino->setberat($_POST["berat"]);
            $save=$vino->actualizar();
        }
        header("Location:index.php?controller=bodega&action=detalle&id=".$_POST["bodega"]);
    }
    
    
    public function view($vista,$datos){
        $data = $datos;  
        require_once  __DIR__ . "/../view/" . $vista . ".php";

    }

}
?>
