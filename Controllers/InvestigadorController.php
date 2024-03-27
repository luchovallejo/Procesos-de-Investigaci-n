<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."procesoeducativo/Models/Entities/Investigador.php";

class InvestigadorController{
    // -------------------
    public static function ejecutarAccion(){
        $accion = @$_REQUEST["accion"];
        switch($accion){
            case "Guardar";
            InvestigadorController::guardar();
            break;
            case "Buscar";
            InvestigadorController::buscar();
            break;
            case "Editar";
            InvestigadorController::editar();
            break;
            case "Eliminar";
            InvestigadorController::eliminar();
            break;
            case "Todo";
            InvestigadorController::listar_todo();
            break;
            case "Login";
            InvestigadorController::login();
            break;
        default:
        header("Location: ../View/error.php?msj=Accion no permitida");
        exit;
        }
    }

    // ----------------------

    public static function guardar(){
        $id = @$_REQUEST["id"];
        $nombre = @$_REQUEST["nombre"];
        $apellido = @$_REQUEST["apellido"];
        $telefono = @$_REQUEST["tlf"];


        $u = new Investigador();

        $id = $id;
        $nombre = $nombre;
        $apellido = $apellido;
        $telefono = $telefono;

        try{
            $u->save();
            $total = @Investigador::count();
            $msj = "Investigador guardado, Total: $total";
            header("Location: procesoeducativo/View/agregar.php?msj=$msj");
        exit;
        }
        catch(Exception $error){
            if(strstr($error->getMessage(), "Duplicate")){
                $msj = "El Investigador con ID: $id ya existe";
            }

            else{
                $msj = "Ocurrio un error al guardar la informacion del investigador";
            }
            header("Location: ../View/agregar.php?msj=$msj");
            exit;
        }
    }

    public static function buscar(){
        $id = @$_REQUEST["ID"];

        try{
            $u = Investigador::find($id);

            $_SESSION["investigador.find"] = serialize($u);
            $msj = "Investigador encontrado";
            header("Location: ../View/buscar.php?msj=$msj");
        }
        catch(Exception $error){
            if(strstr($error->getMessage(), $id)){
                $msj = "El Investigador con ID: $id no existe";
            }
            else{
                $msj = "Ocurrio un error al guardar investigador";
            }
            $_SESSION["investigador.find"] = NULL;
            header("Location: ../View/buscar.php?msj=$msj");
            exit;
        }
    }

    public static function editar(){

        $id = @$_REQUEST["ID"];
        $u = $_SESSION["investigador.find"];
        $u = unserialize($u);

        if($u->id != $id){
            $msj = "El ID no corresponde al investigador consultado";
            header("Location: ../View/buscar.php");
            exit;
        }

        $nombre = @$_REQUEST["nombre"];
        $apellido = @$_REQUEST["apellido"];
        $telefono = @$_REQUEST["tlf"];

        $nombre = $nombre;
        $apellido = $apellido;
        $telefono = $telefono;

        try{
            $u->save();
            $_SESSION["investigador.find"] = serialize($u);
            $msj = "Dato investigador editado";
            header("Location: ../View/buscar.php");
            exit;
        }

        catch(Exception $error){
            if(strstr($error->getMessage(), $id)){
                $msj = "El Investigador con ID: $id no existe";
            }
            else{
                $msj = "Ocurrio un error al editar informacion del investigador";
            }
            $_SESSION["investigador.find"] = NULL;
            header("Location: ../View/buscar.php?msj=$msj");
            exit;
        }
    }

    public static function eliminar(){

        $id = @$_REQUEST["ID"];
        $u = $_SESSION["investigador.find"];
        $u = unserialize($u);

        if($u->id != $id){
            $msj = "El ID no corresponde al investigador consultado";
            header("Location: ../View/buscar.php");
            exit;
        }

        try{
            $u->delete();
            $total = @Investigador::count();
            $u = $_SESSION["investigador.find"];
            $msj = "Investigador eliminado, Total: $total";
            header("Location: ../View/agregar.php?msj=$msj");
        exit;
        }

        catch(Exception $error){
            if(strstr($error->getMessage(), $id)){
                $msj = "El Investigador con ID: $id no existe";
            }
            else{
                $msj = "Ocurrio un error al eliminar informacion del investigador";
            }
            $_SESSION["investigador.find"] = NULL;
            header("Location: ../View/buscar.php?msj=$msj");
            exit;
        }  
    }

    public static function listar_todo(){
        try {
            $investigadores = Investigador::all();
            if($investigadores == null){
                $_SESSION["investigadores.all"] = NULL;
                $msj = "Total investigadores: 0";
            }else{
                $total = count($investigadores);
                $investigadores = serialize($investigadores);
                $_SESSION["investigadores.all"] = $investigadores;
            }
            $msj = "Total Investigadores: $total";
            header("Location: ../View/listar_todo.php?msj=$msj");
        }catch(Exception $error){
            $_SESSION["investigadores.all"] = null;
            header("Location procesoeducativo/View/listar_todo.php?msj=Total investigadores: 0");
        }
    }

    public static function login(){
        $id = @$_REQUEST["ID"];
        $nombre = @$_REQUEST["nombre"];

        try{
            $u = Investigador::find($id);
            if($u->nombre == $nombre){
                $u = serialize($u);
                $_SESSION["investigador.login"] = $u;
                header("Location: ../View/index.php");
                exit;
            }else{
                $_SESSION["investigador.login"] = null;
                header("Location: ../View/login.php?msj= nombre incorrecto");
                exit;
            }
        }
        catch(Exception $error){
            if(strstr($error->getMessage(), $id)){
                $msj = "El investigador con ID: $id no existe";
            } else{
                $msj = "Error al iniciar sesion";
            }
            $_SESSION["investigador.find"] = null;
            header("Location: ../View/login.php?msj=$msj");
            exit;
        }
    }
}

InvestigadorController::ejecutarAccion();