<html>
<head>
  <title>REGISTRO UNAH</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>REGISTRO UNAH</h1></center>
  	<form method="POST" action="login.php">

  	<div class="form-group">
	    <label for="nombre">Nombre </label>
	    <input type="text" name="nombre" class="form-control" id="nombre">
	</div>

   <div class="form-group">
	    <label for="cuenta">Cuenta </label>
	    <input type="text" name="cuenta" class="form-control" id="cuenta">
	</div>

	<div class="form-group">
	    <label for="carrera">Carrera</label>
	    <input type="text" name="carrera" class="form-control" id="carrera">
	</div>
    
    <center><input type="submit" value="Registrar" class="btn btn-success" name="btn1"></center>

  </form>

  <?php
  	if(isset($_POST['btn1']))
  	{
  		include("conexion.php");

  		$nombre=$_POST['nombre'];
  		$cuenta=$_POST['cuenta'];
  		$carrera=$_POST['carrera'];
  	
  		$conexion->query("INSERT INTO $tabla_db1 (dnombre,cuenta,carrera) values ('$nombre','$cuenta','$carrera')");

  		include("cerrar_bd.php");

  	}
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>