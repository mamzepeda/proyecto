<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>

<div class="container" id='login'>
	<div class="panel panel-success">
		<div class="panel-heading text-center">
			<h2>LOGIN UNAH</h2>
      <form method="POST" action="matricula.php">
		</div>
		<div class="panel-body">
			
			<h4>Nombre: </h4>
			<input type="text" class="form-control" name="nombre" placeholder="Nombre"><br>
			<h4>Cuenta: </h4>
			<input type="text" class="form-control" name="cuenta" placeholder="Cuenta">
		</div>
		<div class="panel-footer">
			<button class="btn btn-primary">Ingresar</button>
			<button class="btn btn-success">Registrar</button>
		</div>
	</div>
</div>

</body>
</html>