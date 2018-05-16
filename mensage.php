
<?php
eheadr("conten-type: text/html; charset=utf-8");
error_reporting(0);
require_once("conexion.php");
class nombre

{
	 public function ingresar(){
	 	if(empty($_POST["nombre"]) or empty($_POST["cuenta"]))
	 	{ 
	 		echo "usted debe de llenar los cambios";
	 
	
         }
         else{
	          $sql="select * from nombre where nombre='".$_POST["nombre"]."'and cuenta='".$_POST["cuenta"]."'";
	          $obj=pg_query(login::conex(),$sql);
	        }
	     if(pg_fetch_array($obj)>0)
	       {
		     ession["session_user"]=$_POST["nombre"];
		     header("location:matricula.php");
	        }else
	        {
		      echo "datos erroneos";
		    }
		}
	}
 }



?>