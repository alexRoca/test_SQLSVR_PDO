<?php
// php 7.3
	try{
		$dsn = "sqlsrv:Server=localhost;Database=homestead";
		$conn = new PDO($dsn, "aroca", "12345678");
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
		$sql = "SELECT * FROM RB_Contactabilidad_COT";

		foreach ($conn->query($sql) as $row) {
			print_r($row);
		}
		
	}catch(PDOException $e){
		print_r($e);
    }

    
	
/*
$serverName = "localhost";
$connectionInfo = array( "Database"=>"homestead","UID"=>"aroca","PWD"=>"12345678","CharacterSet" => "UTF-8");
$conn_sis = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn_sis){
    die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT * FROM RB_Contactabilidad_COT";
$ejecuta = sqlsrv_query($conn_sis, $sql);

while($fila = sqlsrv_fetch_array($ejecuta, SQLSRV_FETCH_ASSOC)) {
    print_r($fila);
}
*/