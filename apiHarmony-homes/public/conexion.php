<?php
    include "../vendor/adodb/adodb-php/adodb.inc.php";

    function conectar(){
        //indicar el driver de la conexion
        $conector=NewADOConnection('mysql');

        //credenciales de conexion
        $host="localhost";
        $user="root";
        $pass="";
        $bd="harmony-homes";

        //habilitar el modo debuig para desarrollo
        $conector->debug=true;   //false
        
        //abrir la cinexion
        $conector->Connect($host,$user,$pass,$bd);

        return $conector;

    }
    

?>