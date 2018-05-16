<?php 
	session_start();
	class login
	{
     function conex()
     { 
     	$nombre='pstgres';
        $cuenta='';
        $db='basedatosproyecto';
        $puerto='5432';
        $host='localhost';
        $parametros="password=$cuenta, user=$nombre,dbname=$db, puerto=$puerto,host=$host";
	    $conex=pg_connect($parametros) or die("error de conxion".pg_last_error());
	    return $conex;
	  }
	}
?>
	

