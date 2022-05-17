<?php
    
    require "../models/conexionPDO.php";
  $sentencia = $conn->query("SELECT a.id, a.title,a.url,a.description,a.categoryAsoc,a.visible, b.name FROM favorite a LEFT JOIN categorias b ON a.categoryAsoc = b.id ORDER BY a.id ASC");
  $favoritos = $sentencia->fetchAll(PDO::FETCH_OBJ);
  
    session_start();
    if (!isset($_SESSION['user'])&& $_SESSION['user']==null) {
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
          <title>Menu usuario</title>
          <meta charset="utf-8">
          <link rel="shortcut icon" href="Images/favicon.ico"/>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href='../estilo/bootstrap.min.css' rel='stylesheet'>
          <link rel="stylesheet" href="../estilo/estilos.css" type="text/css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="../js/scrips.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      </head>
              
<body class="cuerpo" >
 
<div class="navbar navbar-default"> 
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <span align="left" style="font-size:25px;cursor:pointer" title="Mas Informacion" onclick="openNav()" >&#9783;</span> 
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="../vista/registrarFavorito.php" title="register">Registrar Pagina </a>
                    </li>
                   
                   <li>
                       <a href="../vista/category.php" title="category">Registro Categorias</a>
                   </li>
                </ul>
    </div>
 </div>
  
</div>  

      <center>
       <h2>Bienvenido </h2> <?php echo $_SESSION['user'];?>
       </center>
    
<div class="borde2">
<div class="col-12">

          <center><h1><span>Lista de favoritos</span></h1></center>
<a href="../vista/registrarFavorito">Adicionar Url favorita</a>
          <div class="table-responsive">          
          <table id="example" class="display" style="width:100%">
          <thead> 
          <tr>
              <th>Titulo</th>
              <th>pagina</th>
              <th>descripcion</th>
              <th>categoria</th>
              <th>vista</th>
              <th>Editar</th>
              <th>Eliminar</th>              
            </tr>
           </thead>
           <tbody>  
            
               <?php foreach($favoritos as $favorito){ ?>
              <tr>  
                <td><?php echo $favorito->title ?></td>
							  <td><?php echo $favorito->url ?></td>
							  <td><?php echo $favorito->description ?></td>
							  <td><?php echo $favorito->name ?></td>
                <td><?php echo $favorito->visible ?></td>                                         
                <td><a class="btn btn-warning" href="<?php echo "../vista/editarFavorito.php?id=" . $favorito->id?>">Editar 📝</a></td>
              <td><a class="btn btn-danger" href="<?php echo "../controllers/eliminarFav.php?id=" . $favorito->id?>" title="click for delete" onclick="return confirm('seguro que quieres eliminar ?')">Eliminar 🗑️</a></td>
             	</tr>
             <?php } ?>
               </tbody>         
            
            </table>
            <br><br><br>
        </div>
      </div>
    </div>
 
     <br><br><br>
     
        <center> 
            <a href="../controllers/salir.php" title="cerrar sesión y salir" ><img src="../images/salir.png" width="150" height="50" ></a>
        </center>
   
  <div class="foot">
    <p>Pie pagina <a href="" target="_blank"></a></p>
  </div>

</body> 
       