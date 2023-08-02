<?php

class conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost; gpamotors=pos", "root", "1023974256");
        $link ->exec("set names uto8");
        return $link;
    }
}
?>