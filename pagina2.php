<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pagina2</title>
    <link rel="stylesheet" href="css/bootstrap-cyborg.css">
  <link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
    <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="padding-top : 60px;">

<!-- Barra de Navegacion -->

<nav class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                               
      </button>

    <a class="navbar-brand" href="index.php">HT7A</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="info.html">Informacion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <ul class= "nav navbar-nav navbar-right">
     <li><a href="#">
      <span class="glyphicon glyphicon-star"></span>Menu</a>
    </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Informacion -->
<div class="jumbotron">
  <h1>

<?php  

	$respuesta = $_GET['q'];
	$base=$_GET['t'];

	if ($respuesta==1) {
		echo "Usuarios";
	} else if ($respuesta==2) {
		echo "Intereses";
	}
	

?>


  </h1>

  <h2><small>LISTADO DE DETALLES<small></h2>
    <div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
       <table class="table table-hover table-responsive">
     <thead>
        <tr>

       
<?php  

	$respuesta = $_GET['q'];
	$base=$_GET['t'];

  $Conexion = mysql_connect('localhost','root','');
  mysql_select_db('BD_Usuarios', $Conexion);



  if ($respuesta==2 && $base==1) {

  		echo "   <th>INTERES</th>
          <th>USUARIO</th>
        </tr>
      </thead>
     ";

  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE I.id =1";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['Intereses']."</td>";
        echo "<td>".$dato['user']."</td><br>"; 
        echo "<tr>";  
  }
}
else
if ($respuesta==2 && $base==2) {

	echo "   <th>INTERES</th>
          <th>USUARIO</th>
        </tr>
      </thead>
     ";

  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE I.id=2";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['Intereses']."</td>";
        echo "<td>".$dato['user']."</td><br>"; 
        echo "<tr>";  
  }
}

else
if ($respuesta==2 && $base==3) {

		echo "   <th>INTERES</th>
          <th>USUARIO</th>
        </tr>
      </thead>
     ";

  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE I.id=3";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['Intereses']."</td>";
        echo "<td>".$dato['user']."</td><br>"; 
        echo "<tr>";  
  }
}

else
if ($respuesta==1 && $base==1) {

	echo "   <th>USUARIO</th>
          <th>INTERESES</th>
        </tr>
      </thead>
     ";

  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE U.id=1";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['user']."</td>";
        echo "<td>".$dato['Intereses']."</td><br>"; 
        echo "<tr>";  
  }
}


else
if ($respuesta==1 && $base==2) {
	echo "   <th>USUARIO</th>
          <th>INTERESES</th>
        </tr>
      </thead>
     ";


  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE U.id=2";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['user']."</td>";
        echo "<td>".$dato['Intereses']."</td><br>"; 
        echo "<tr>";  
  }
}

else
if ($respuesta==1 && $base==3) {
	echo "   <th>USUARIO</th>
          <th>INTERESES</th>
        </tr>
      </thead>
     ";


  	  $query="SELECT U.user, I.Intereses FROM Usuarios U 
  INNER JOIN Detalles D ON U.id = D.Usuarios_id 
  INNER JOIN Intereses I ON D.Intereses_id = I.id WHERE U.id=3";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['user']."</td>";
        echo "<td>".$dato['Intereses']."</td><br>"; 
        echo "<tr>";  
  }
}



 ?>
   </table>


         
	</div>
  </div>
</div>
</div>


</body>
</html>



