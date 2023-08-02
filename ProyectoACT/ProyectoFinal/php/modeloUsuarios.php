<?php

require_once "conexion.php";

class ModeloUsuarios{
    static public function mdlMostrarUsuarios($tabla,$campo,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $campo = $:campo");
        $stmt->bindParam(":campo",$valor,PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt ->fetch();
        $stmt ->close();
        $stmt = null;
    }
}
?>