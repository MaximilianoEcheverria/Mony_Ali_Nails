<?php
//Llamada al modelo para todos los controladores
require_once("modelo/index.php");
//Llamada a PHPMailer
require_once("mailer/mailer.php");
class usuarioController{
    private $model;
    //Funcion constructora
    public function __construct(){
        $this->model = new Modelo();
    }
    //mostrar -> Muestra todos los turnos del usuario en Sesion activa
    static function mostrar(){
        $user = $_SESSION['user'];
        $usuario = new Modelo();
        $dato = $usuario->mostrar("usuarios","usuario = '$user'");
        require_once("vista/usuario/usuarioMostrar.php");
    }
    //nuevo -> Define la ruta de la pagina de registro de usuario
    static function nuevo(){        
        require_once("vista/usuario/usuarioRegistrar.php");
    }
    //recuperar -> Define la ruta de la pagina de recuperacion de usuario/clave
    static function recuperar(){
        require_once("vista/usuario/UsuarioRecuperar.php");
    }
    //login -> Define la ruta de la pagina de login para usuarios
    static function login(){
        require_once("login.php");
    }
    //Guardar usuario
    static function guardar(){
        $usuario= $_REQUEST['usuario'];
        $correo = $_REQUEST['correo'];
        $clave= $_REQUEST['clave'];
        $usu = new Modelo();
        $verificarUsu = $usu->verificarUsuarioExiste($usuario);
        $verificarCorreo = $usu->verificarcorreoExiste($correo);
        if($verificarUsu == true){
            if($verificarCorreo == true){
                $hash= password_hash($clave,PASSWORD_DEFAULT);
                $data = "'$usuario','$correo','$hash'";
                $dato = $usu->insertar("usuarios",$data);
                header("location:".urlsite."?u=login&mensaje=2"); 
            }else{
                echo('<script>console.log("registrarErrorMail()")</script>');
            }
        }else{
            echo('<script>console.log("registrarErrorUsuario()")</script>');
        }
        
    }
    //Editar usuario
    static function editar(){    
        $id_usuario = $_SESSION['id_usuario'];
        $usu = new Modelo();
        $dato = $usu->mostrar("usuarios","id_usuario=".$id_usuario);        
        require_once("vista/usuario/usuarioEditar.php");
    }
    //Actualizar usuario
    static function actualizar(){
        $id_usuario = $_REQUEST['id_usuario'];
        $usuario= $_REQUEST['usuario'];
        $correo = $_REQUEST['correo'];
        $clave= $_REQUEST['clave'];
        $hash= password_hash($clave,PASSWORD_DEFAULT);
        $data = "usuario='$usuario', correo='$correo', clave='$hash'";
        $usu = new Modelo();
        $dato = $usu->actualizar("usuarios",$data,"id_usuario=".$id_usuario);
        header("location:".urlsite."?u=editar&mensaje=1");
    }
    //Eliminar -> Elimina el usuario y cierra su sesion
    static function eliminar(){    
        $id_usuario = $_REQUEST['id_usuario'];
        $usu = new Modelo();
        $dato = $usu->eliminar("usuarios","id_usuario=".$id_usuario);
        if($dato){
            session_destroy();
            header("location:".urlsite."?u=login");
        }
        
    }
    //Login usuario -> verifica el usuario/clave y le da acceso
    static function ingresar(){
        $usuario = $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];
        $usu = new Modelo();
        $dato = $usu->verificarUsuario($usuario,$clave);
        if (!$dato){
            header("location: login.php?mensaje=1");
        }else {
            header("location:".urlsite);
        }
    }
    //Salir -> Cierra la sesion y destruye su variable
    static function salir(){
        session_start();
        session_destroy();
        header("location: ".urlsite);
    }
    //Recuperar clave -> Permite recuperar el usuario/clave 
    static function recuperarClave(){
        $correo = $_REQUEST['correo'];
        $usu = new Modelo();
        $dato = $usu->mostrar("usuarios","correo = '$correo'");
        //Comprueba que hay una cuenta asociada el correo y si existe, le asigna una clave aleatoria 
        if(!empty($dato)){
            foreach($dato as $key => $value){
                foreach($value as $v){
                    $id_usuario = $v['id_usuario'];
                    $usuario = $v['usuario'];
                    $correo = $v['correo'];
                }
            }
            //Generacion de la clave aleatoria
            $clave = "";
            $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
            $max = strlen($pattern)-1;
            for($i = 0; $i < 8; $i++){
                $clave .= substr($pattern, mt_rand(0,$max), 1);
            }
            //Hashea y guarda la nueva clave
            $hash= password_hash($clave,PASSWORD_DEFAULT);
            $data = "usuario='$usuario', correo='$correo', clave='$hash'";
            $usu = new Modelo();
            $dato = $usu->actualizar("usuarios",$data,"id_usuario=".$id_usuario);
            //Instancia de PHPMailer
            $mailer = new Mailer();
            //Envia el usuario/clave al correo asociado
            $mailer->enviar_email($correo, $clave, $usuario);
            header("location:".urlsite."?u=login&msj=Revise su casilla de emails");
        }else{
            header("location:".urlsite."?u=login&msj=No hay cuentas asociadas al correo");
        }
    }
}
