<?php
//************************************************************************************************
//* mssql
//************************************************************************************************
$server = '10.10.40.104';
$sistema_user = 'usrinfo';
$sistema_pwd = 'Uinfo15Egr';
$Database = 'DBPRUEBAS';
/*
    $conexion = mssql_connect($server, $sistema_user, $sistema_pwd);
    
    if(!$conexion)
    {
        $error = error_get_last();
        $error = $error["message"];        
        die("No se puede conectar al servidor (Disculpe las molestias)- $error");
    }

mssql_select_db($Database, $conexion) or die("Imposible seleccionar base de datos."); 
*/

//************************************************************************************************
//* sql_server
//************************************************************************************************

$connectionInfo = array( "Database"=>$Database, "UID"=>$sistema_user, "PWD"=>$sistema_pwd);

$conn = sqlsrv_connect( $server, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}


/*
$serverName = "serverName\instanceName";
$connectionInfo = array( "Database"=>"dbName", "UID"=>"username", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT FirstName, LastName FROM SomeTable";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0].", ".$row[1]."<br />";
}

sqlsrv_free_stmt( $stmt);
*/
?>