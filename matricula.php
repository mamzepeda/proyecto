<html>
<head>
  <title>ADICION UNAH</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<center><h1>ADICION UNAH</h1></center>
  	<form method="POST" action="mensage.php" >
<div>
  <center>

       <form method="POST" action="validar.php">
        <label type="text">ASIGNATURA</label>
        <br>
         <td>
              <select>
                                  
                 <option class="selected">---Seleccione asignatura---</option>
                 <option>programacion 1</option>
                 <option>programacion 2</option>
                 <option>programacion 3</option>
                 <option>programacion 4</option>
                 <option>algoritmos</option>
                 <option>sistemas operativos</option>
                 <option>redes 1</option>
                 <option>redes 2</option>
                      
              </select>
         </td>
        <br>
        
        <center>
              <form method="POST" action="validar.php">
        <label type="text">SECCION</label>
        <br>
        <td>
       
              <select>
                 <option class="selected">---Seleccione la seccion---</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                 <option>seccion 0700</option>
                      
              </select>
         </td>
        
    </form>
  </center>
  </center>
   <center><input type="submit" value="ADICIONAR" class="btn btn-success" name="btn1"></center>

</div>
</div>
</body>
</html>