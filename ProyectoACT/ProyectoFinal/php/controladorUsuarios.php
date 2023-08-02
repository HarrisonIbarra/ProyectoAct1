<?php

class ControladorUsuarios{
    static public function controlIngreso(){
        
        if(isset($_POST['ingresarUsuario'])){
            if(preg_match('/^[0-9]+$/',$_POST['ingresarUsuario'])&&preg_match('/^[a-zA-Z0-9]+$/',$_POST['ingresarPassword'])){

                $tabla = "cliente";
                $campo = "documento";
                $valor = $_POST["ingresarUsuario"];
                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$campo,$valor);

                if($respuesta['cliDocumento']==$_POST['ingresarUsuario']&&$respuesta['cliContraseña']==$_POST['ingresarPassword']){

                    /* $_SESSION['iniciarSesion']="ok"; */

                    echo <script>
                    window.location = "inicio";
                    </script>;           
                }else{
                    echo ("<div class='alert alert-danger'>ERROR AL INGRESAR</div>")
                }

            }
        }
    }
}
?>