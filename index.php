<?php
//Inicio de sesion
session_start();
//Llamada a la ruta por defecto
require_once("config.php");
//Llamada de todos los controladores
require_once("controlador/clienteControlador.php");
require_once("controlador/turnoControlador.php");
require_once("controlador/servicioControlador.php");
require_once("controlador/usuarioControlador.php");

//Comprueba que exista un usuario activo
if(!isset($_SESSION['user'])){
    //Si no existe usuario activo, da accesa al login
    if(isset($_REQUEST['u'])){
        if(method_exists("usuarioController",$_REQUEST['u'])){
            usuarioController::{$_REQUEST['u']}();
        }
    }else{
        header("location: login.php");
    }
}else{
    //Si existe usuario activo, da acceso a todas las demas acciones de todos los controladores
    if(isset($_REQUEST['u'])){
        //Recibe un metodo por parametro y si existe en el controlador, la ejecuta
        if(method_exists("usuarioController",$_REQUEST['u'])){
            usuarioController::{$_REQUEST['u']}();
        }
    }elseif(isset($_REQUEST['c'])){
        //Recibe un metodo por parametro y si existe en el controlador, la ejecuta
        if(method_exists("clienteController",$_REQUEST['c'])){
            clienteController::{$_REQUEST['c']}();
        }
    }elseif(isset($_REQUEST['t'])){
        //Recibe un metodo por parametro y si existe en el controlador, la ejecuta
        if(method_exists("turnoController",$_REQUEST['t'])){
            turnoController::{$_REQUEST['t']}();
        }
    }elseif(isset($_REQUEST['s'])){
        //Recibe un metodo por parametro y si existe en el controlador, la ejecuta
        if(method_exists("servicioController",$_REQUEST['s'])){
            servicioController::{$_REQUEST['s']}();
        }
    }else{
        //Si no se especifica ningun metodo de ningun controlador ejecuta por defecto mostrar de clienteControlador
        clienteController::mostrar();
    }
}
