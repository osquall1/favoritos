<?php
    
    require "../models/conexionPDO.php";
  $sentencia = $conn->query("SELECT * FROM categorias");
  $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
  
    session_start();
    if (!isset($_SESSION['user'])&& $_SESSION['user']==null) {
        header("location: index");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
          <title>Categorias</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href='../estilo/bootstrap.min.css' rel='stylesheet'>
          <link rel="stylesheet" href="../estilo/estilos.css" type="text/css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="../js/scrips.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      </head>
<body class="cuerpo">

 
<div>   
   
    <center>
      <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>           
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                    <a data-toggle="modal" data-target="#regCat">Registrar categoria</a>
                    </li>
                    <li>
                        <a href="../vista/mainmenu.php" title="directorio de contactos">Volver</a>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="modal fade" id="regCat" tabindex="-1" role="dialog" aria-labelledby="cambiaContra"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../controllers/crearCategoria.php" method="POST">
      <div class="modal-body">
        
          <div class="artModal" >
                    <br>
                    <div class="form-group">
                    <label for="nombre">Nombre</label>
            <input required name="nombre" type="text" id="nombre" class="form-control">
			</div>           
                
            <div class="form-group">
				<label for="tipo">Tipo</label>
                <input required name="tipo" type="text" id="tipo" class="form-control">
			</div>
       
      <center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Omitir</button>
        <button type="submit" class="btn btn-success">Guardar</button>
      </center>
      <br>              
    </div>
  </div>
      </form>        
    </div> 
    </div> 
</div> 
    <br> 
    <br>     
    <center><h2>Categorias </h2> <?php echo $_SESSION['user'];?></center>
<div class="borde2">
<div class="col-12">
          
<a data-toggle="modal" data-target="#regCat">Adicionar Categoria</a>
          <div class="table-responsive">          
          <table id="example" class="display" style="width:100%">
          <thead> 
          <tr>
              <th>Tipo</th>
              <th>Nombre</th>
              
              <th>Editar</th>
              <th>Eliminar</th>              
            </tr>
           </thead>
           <tbody>  
            
               <?php foreach($categorias as $categoria){ ?>
              <tr>  
                <td><?php echo $categoria->type ?></td>
							  <td><?php echo $categoria->name ?></td>						                                      
                <td><a class="btn btn-warning" href="<?php echo "../vista/editarCategoria.php?id=" . $categoria->id?>">Editar 📝</a></td>
              <td><a class="btn btn-danger" href="<?php echo "../controllers/eliminarCat.php?id=" . $categoria->id?>" title="click for delete" onclick="return confirm('seguro que quieres eliminar ?')">Eliminar 🗑️</a></td>
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
        <a href="../vista/mainmenu"><img src="../images/atras.png" width="200" height="60"></a>    
        </center>
   
  <div class="foot">
    <p>Pie pagina <a href="" target="_blank"></a></p>
  </div>

</body> 
</html>
<?php exit(); ?>