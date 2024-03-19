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
        default:
        header("Location: ../View/error.php?msj=Accion no permitida");
        exit;
        }
    }

    // ----------------------

    public static function guardar(){
        $id_Investigador = @$_REQUEST["id"];
        $nombre = @$_REQUEST["nombre"];
        $apellido = @$_REQUEST["apellido"];
        $telefono = @$_REQUEST["tlf"];


        $u = new Investigador();

        $id_Investigador = $id_Investigador;
        $nombre = $nombre;
        $apellido = $apellido;
        $telefono = $telefono;

        try{
            $u->save();
            $total = @Investigador::count();
            $msj = "Investigador guardado, Total: $total";
            header("Location: ../View/agregar.php?msj=$msj");
        exit;
        }
        catch(Exception $error){
            if(strstr($error->getMessage(), "Duplicate")){
                $msj = "El Investigador con ID: $id_Investigador ya existe";
            }

            else{
                $msj = "Ocurrio un error al guardar la informacion del investigador";
            }
            header("Location: ../View/agregar.php?msj=$msj");
            exit;
        }
    }

    public static function buscar(){
        $id_Investigador = @$_REQUEST["ID"];

        try{
            $u = Investigador::find($id_Investigador);

            $_SESSION["investigador.find"] = serialize($u);
            $msj = "Investigador encontrado";
            header("Location: ../View/buscar.php?msj=$msj");
        }
        catch(Exception $error){
            if(strstr($error->getMessage(), $id_Investigador)){
                $msj = "El Investigador con ID: $id_Investigador no existe";
            }
            else{
                $msj = "Ocurrio un error al guardar investigador";
            }
            $_SESSION["investigador.find"] = NULL;
            header("Location: ../View/buscar.php?msj=$msj");
            exit;
        }
    }
}

InvestigadorController::ejecutarAccion();