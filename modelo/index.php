<?php
//Modelo para todos los controladores
class Modelo{
    private $Modelo;
    private $db;    
    private $datos;   
    //funcion constructura de la conexion a la db 
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mony_ali_nails',"root","");
    }
    //Insertar -> Consulta Insert en una tabla y con los datos recibidos por parametro
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        $resultado=$this->db->query($consulta);
        //Verifica que se haya realizado la consulta correctamente
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
     //Mostrar -> Consulta Select de una tabla y con una condicion especifica
     public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resu=$this->db->query($consul); 
        //Devuelve un array con los datos obtenidos en la consulta       
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
        
    } 
    //Actualizar -> Consulta Update de una tabla, con los datos y la condicion especifica
    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        //Verifica que se haya ejecutado la consulta
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    //Eliminar -> Consulta Delete en una tabla y con la condicion especifica
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        //Verifica que se haya ejecutado la consulta
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
    //Verificar que no haya un turno en la misma fecha/hora antes de registrar uno nuevo turno
    public function verificarFecha($fecha){
        $fechas = $this->db->query("select fecha_turno from turnos where fecha_turno = '$fecha'");
        if($fechas->fetch()){
            return true;
        }else{
            return false;
        }
    }
    //Verificar que no haya un turno en la misma fecha/hora antes de actualizar un turno, a menos que se trate del mismo turno
    public function verificarYActualizar($id_turno,$fecha){
        $turno = $this->db->query("select * from turnos where fecha_turno = '$fecha'");
        $row = $turno->rowCount();
        $fetch = $turno->fetch();
        if($row == 1){
            if($id_turno == $fetch['id_turno']){
                return true;
            }else{
                return false;
            }
        }
    }
    //Verificar usuario por usuario y clave al iniciar sesion
    public function verificarUsuario($usuario,$clave){
        $usu = $this->db->query("select * from usuarios where usuario = '$usuario'");
        $row = $usu->rowCount();
        $fetch = $usu->fetch();
        $hash = $fetch['clave'];
        //Verifica que exista el usuario
        if($row > 0){
            //Verifica la clave ingresada con la guardada
            if(password_verify($clave, $hash)){
                //Crea la variable de sesion de usuario
                $_SESSION['user'] = $fetch['usuario'];
                $_SESSION['id_usuario'] = $fetch['id_usuario'];
            }
        }
        return  $_SESSION['user'];
    }
    //Verificar que no existan dos usuarios iguales
    public function verificarUsuarioExiste($usuario){
        $usu = $this->db->query("select * from usuarios where usuario = '$usuario'");
        $row = $usu->rowCount();
        if($row > 0){
            return false;
        }else{
            return true;
        }
    }
     //Verificar que no existan dos correos iguales
     public function verificarcorreoExiste($correo){
        $usu = $this->db->query("select * from usuarios where correo = '$correo'");
        $row = $usu->rowCount();
        if($row > 0){
            return false;
        }else{
            return true;
        }
    }
}

