<?php
//Llamada al modelo para todos los controladores
require_once("modelo/index.php");
class servicioController{
    private $model;
        //Funcion constructora 
        public function __construct(){
        $this->model = new Modelo();
    }
    //Mostrar -> Muestra todos los servicios
    static function mostrar(){
        $cliente = new Modelo();
        $dato = $cliente->mostrar("servicios","1");
        require_once("vista/servicio/serviciosMostrar.php");
    }
    //nuevo -> Define la ruta de la pagina de registro de servicios
    static function nuevo(){        
        require_once("vista/servicio/servicioRegistrar.php");
    }
    //guardar -> Ejecuta la consulta para registrar un nuevo servicio
    static function guardar(){
        $servicio= $_REQUEST['servicio'];
        $precio= $_REQUEST['precio'];
        $data = "'$servicio','$precio'";
        $ser = new Modelo();
        $dato = $ser->insertar("servicios",$data);
        header("location:".urlsite."?s=mostrar");
    }
    //editar -> Carga la vista para editar un servicio en particular
    static function editar(){    
        $id_servicio = $_REQUEST['id_servicio'];
        $ser = new Modelo();
        $dato = $ser->mostrar("servicios","id_servicio=".$id_servicio);        
        require_once("vista/servicio/servicioEditar.php");
    }
    //actualizar -> Ejecuta la consulta de actualizacion del servicio
    static function actualizar(){
        $id_servicio = $_REQUEST['id_servicio'];
        $servicio= $_REQUEST['servicio'];
        $precio= $_REQUEST['precio'];
        $data = "servicio='$servicio', precio='$precio'";
        $ser = new Modelo();
        $dato = $ser->actualizar("servicios",$data,"id_servicio=".$id_servicio);
        header("location:".urlsite."?s=mostrar&msj=El servicio fue actualizado con exito");
    }
    //eliminar -> Ejecuta la consulta de eliminacion de un cliente en particular
    static function eliminar(){    
        $id_servicio = $_REQUEST['id_servicio'];
        $ser = new Modelo();
        $dato = $ser->eliminar("servicios","id_servicio=".$id_servicio);
        header("location:".urlsite."?s=mostrar&msj=El servicio fue eliminado con exito");
    }
}