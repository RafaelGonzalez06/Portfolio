<?php 
	
	$host = "localhost";    
	$basededatos = "myportfolio_rg_php";    
	$usuariodb = "root";    
	$clavedb = "";   


	$tabla_db1 = "correo"; 	   
	

	
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "No es posible la conexion con la Base de Datos....";
	    exit();
	}
    

?>