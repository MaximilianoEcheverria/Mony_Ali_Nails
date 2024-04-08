<?php
//Llamada al modelo para todos los controladores
require_once("modelo/index.php");
class turnoController{
    private $model;
    //Funcion constructora 
    public function __construct(){
        $this->model = new Modelo();
    }
    //Mostrar -> Muestra todos los turnos de un cliente en particular
    static function mostrar(){
        $id_cliente=$_REQUEST['id_cliente'];
        $turno   = new Modelo();
        $cliente = new Modelo();
        $dato = $turno->mostrar("turnos","id_cliente = $id_cliente");
        $cli = $cliente->mostrar("clientes","id_cliente = $id_cliente");
        $servicio = new Modelo();
        $ser = $servicio->mostrar("servicios","1");
        require_once("vista/turno/turnosMostrar.php");
    }
     // mostrar todos -> Muestra todos los turnos
     static function mostrarTodo(){
        $turno   = new Modelo();
        $dato = $turno->mostrar("turnos","1");
        require_once("vista/turno/todosMostrar.php");
    }
    //nuevo -> Define la ruta de la pagina de registro de turnos
    static function nuevo(){      
        $id_cliente = $_REQUEST['id_cliente'];
        $cliente = new Modelo();
        $servicio = new Modelo();
        $cli = $cliente->mostrar("clientes","id_cliente=".$id_cliente);  
        $ser = $servicio->mostrar("servicios","1");
        require_once("vista/turno/turnosMostrar.php");
    }
    //guardar -> Ejecuta la consulta para registrar un nuevo turno
    static function guardar(){
        $id_cliente= $_REQUEST['id_cliente'];
        $id_servicio= $_REQUEST['servicio'];
        $fecha_turno=$_REQUEST['fecha_turno'];
        $turno = new Modelo();
        //Verifica que no exista un turno en la misma fecha/hora de crear uno nuevo
        $fecha = $turno->verificarFecha($fecha_turno);
        if($fecha == false){
            $data = "'$id_cliente','$id_servicio','$fecha_turno'";
            $dato = $turno->insertar("turnos",$data);
            header("location:".urlsite."?t=mostrar&msj=El turno fue registrado con exito&id_cliente=".$id_cliente);
        }else{
            header("location:".urlsite."?t=mostrar&msj=Ya existe un turno en esa fecha y hora&id_cliente=".$id_cliente);
        }
    }
    //editar -> Carga la vista para editar un turno en particular
    static function editarTurno(){    
        $id_turno = $_REQUEST['id_turno'];
        $turno = new Modelo();
        $dato = $turno->mostrar("turnos","id_turno=".$id_turno);  
        $servicio = new Modelo();
        $ser = $servicio->mostrar("servicios","1");      
        require_once("vista/turno/turnoEditar.php");
    }
    //actualizar -> Actualiza un turno en particular
    static function actualizar(){
        $id_turno = $_REQUEST['id_turno'];
        $id_cliente = $_REQUEST['id_cliente'];
        $id_servicio = $_REQUEST['id_servicio'];
        $fecha_turno = $_REQUEST['fecha_turno'];
        $turno = new Modelo();
        //verifica que no haya un turno en la misma fecha/hora a menos que se trate del mismo turno
        $fecha = $turno->verificarYActualizar($id_turno,$fecha_turno);
        if($fecha == true){
            //Actualiza si trata del mismo turno
            $data = "id_cliente='$id_cliente', id_servicio='$id_servicio', fecha_turno='$fecha_turno'";
            $turno = new Modelo();
            $dato = $turno->actualizar("turnos",$data,"id_turno=".$id_turno);
            header("location:".urlsite."?t=mostrar&msj=El turno fue actualizado con exito&id_cliente=".$id_cliente);
        }else{
            //Actualiza si no hay un turno en la misma fecha/hora
            $data = "id_cliente='$id_cliente', id_servicio='$id_servicio', fecha_turno='$fecha_turno'";
            $turno = new Modelo();
            $dato = $turno->actualizar("turnos",$data,"id_turno=".$id_turno);
            header("Location:".urlsite."?t=mostrar&msj=El turno fue actualizado con exito&id_cliente=".$id_cliente);
        }
    }
    //eliminar -> Elimina un turno en particular
    static function eliminar(){    
        $id_turno = $_REQUEST['id_turno'];
        $id_cliente = $_REQUEST['id_cliente'];
        $turno = new Modelo();
        $dato = $turno->eliminar("turnos","id_turno=".$id_turno);
        header("location:".urlsite."?t=mostrar&msj=El turno fue eliminado con exito&id_cliente=".$id_cliente);
    }
}