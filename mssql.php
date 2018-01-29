<?php
//************************************************************************************************
//* mssql
//************************************************************************************************
$server = '10.10.40.104';
$sistema_user = 'usrinfo';
$sistema_pwd = 'Uinfo15Egr';
$Database = 'DBPRUEBAS';

    $conexion = mssql_connect($server, $sistema_user, $sistema_pwd);
    
    if(!$conexion)
    {
        $error = error_get_last();
        $error = $error["message"];        
        die("No se puede conectar al servidor (Disculpe las molestias)- $error");
    }

mssql_select_db($Database, $conexion) or die("Imposible seleccionar base de datos."); 


////// pull request 4

//************************************************************************************************
//* sql_server
//************************************************************************************************

?>