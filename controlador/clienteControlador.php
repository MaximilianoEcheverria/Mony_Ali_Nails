<?php
//Llamado al modelo para todos los controladores
require_once("modelo/index.php");
class clienteController{
    private $model;
    //Funcion constructora 
    public function __construct(){
        $this->model = new Modelo();
    }
    //Mostrar -> Muestra todos los clientes 
    static function mostrar(){
        //Nueva instancia de la clase Modelo
        $cliente = new Modelo();
        //Ejecuto la consulta
        $dato = $cliente->mostrar("clientes","1");
        //Ruta donde se muestrar el resultado de la consulta
        require_once("vista/cliente/clienteMostrar.php");
    }
    //Turnos -> Lista todos los turnos de un cliente en particular segun su id
    static function turnos(){
        $id_cliente=$_REQUEST['id_cliente'];
        $turno = new Modelo();
        $dato = $turno->mostrar("turnos","id_cliente = $id_cliente");
        require_once("vista/cliente/turnosMostrar.php");
    }
    //Nuevo ->Define la ruta a la pagina de registro de clientes
    static function nuevo(){        
        require_once("vista/cliente/clienteRegistrar.php");
    }
    //guardar -> Ejecuta la consulta para registrar un nuevo cliente
    static function guardar(){
        $nombre= $_REQUEST['nombre'];
        $correo= $_REQUEST['correo'];
        $telefono=$_REQUEST['telefono'];
        $diagnostico=$_REQUEST['diagnostico'];
        $data = "'$nombre','$correo','$telefono','$diagnostico'";
        $cliente = new Modelo();
        $dato = $cliente->insertar("clientes",$data);
        header("location:".urlsite."?msj=El cliente fue creado con exito");
    }
    //editar -> Carga la vista para editar un cliente en particular
    static function editar(){    
        $id_cliente = $_REQUEST['id_cliente'];
        $cliente = new Modelo();
        $dato = $cliente->mostrar("clientes","id_cliente=".$id_cliente);        
        require_once("vista/cliente/clienteEditar.php");
    }
    //actualizar -> Ejecuta la consulta de actualizacion del cliente
    static function actualizar(){
        $id_cliente = $_REQUEST['id_cliente'];
        $nombre= $_REQUEST['nombre'];
        $correo= $_REQUEST['correo'];
        $telefono=$_REQUEST['telefono'];
        $diagnostico=$_REQUEST['diagnostico'];
        $data = "nombre='$nombre', telefono='$telefono', correo='$correo', diagnostico='$diagnostico'";
        $cliente = new Modelo();
        $dato = $cliente->actualizar("clientes",$data,"id_cliente=".$id_cliente);
        header("location:".urlsite."?msj=El cliente fue actualizado con exito");
    }
    //eliminar -> Ejecuta la consulta de eliminacion de un cliente en particular
    static function eliminar(){    
        $id_cliente = $_REQUEST['id_cliente'];
        $cliente = new Modelo();
        $dato = $cliente->eliminar("clientes","id_cliente=".$id_cliente);
        header("location:".urlsite."?msj=El cliente fue eliminado con exito");
    }
}