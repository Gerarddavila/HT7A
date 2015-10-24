<html>
<head>
  <meta charset="utf-8">
  <title>Pagina 1</title>
  <link rel="stylesheet" href="css/bootstrap-cyborg.css">
  <link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
    <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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

  <div class="container">
    <div class="page-header">
      <h1>Informacion Importante</h1>
    </div>

    <div class="row" style="min-height:600px;">
      <div  class="col-sm-6">
       <div class="col-xs-3"> 
          <ul class="nav nav-tabs tabs-left">
            <li class="active"><a href="#usuarios" data-toggle="tab">Usuarios</a></li>
            <li><a href="#intereses" data-toggle="tab">Intereses</a></li>
          </ul>
        </div>

        <div class="col-xs-9">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="usuarios"> <div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
       <table class="table table-hover table-responsive">
     <thead>
       
<?php  
 echo "<tr>
          <th>No.</th>
          <th>User</th>
        </tr>
      </thead> ";
  $Conexion = mysql_connect('localhost','root','');
  mysql_select_db('BD_Usuarios', $Conexion);

  $query="SELECT * FROM `Usuarios`";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['id']."</td>";
        echo "<td><a href='pagina2.php?q=1&t=".$dato['id']."'>".$dato['user']."</a></td><br>"; 
        echo "<tr>";        
  }
 ?>
   </table>         
  </div>
  </div>
</div>
</div>

<div class="tab-pane" id="intereses">

  <div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
       <table class="table table-hover table-responsive">
     <thead>
         <?php   

                  echo "<tr>
          <th>No.</th>
          <th>Intereses</th>
        </tr>
      </thead> ";
  $Conexion = mysql_connect('localhost','root','');
  mysql_select_db('BD_Usuarios', $Conexion);

  $query="SELECT * FROM `Intereses`";

  $record = mysql_query($query);

  while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['id']."</td>";
        echo "<td><a href='pagina2.php?q=2&t=".$dato['id']."'>".$dato['Intereses']."</a></td><br>"; 
        echo "<tr>";        
  }
 ?>
   </table>


         
  </div>
  </div>
</div>
  </div>
 </div>
</div>

        <div class="clearfix"></div>

      </div>


</body>
</html>