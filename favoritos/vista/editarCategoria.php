<?php

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "../models/conexionPDO.php";
$sentencia = $conn->prepare("SELECT id, name, type FROM categorias WHERE id = ?;");
$sentencia->execute([$id]);
$category = $sentencia->fetchObject();
if (!$category) {
    #No existe
    echo "¡No existe ese ID!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head> <!--inicio titulo-->
     
  
  <meta charset="utf-8">
          
        <meta name="Language" content="español">
    <title>registrar Categoria</title><!--titulo de la pagina-->
      <link rel="stylesheet" href="../estilo/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>   
   </head> 
  
<body class="cuerpo">   
    
    <center> <h1>Editar categoria</h1> </center>

    
    <center> 
        
        <br>
<div class="artE" > 

 
 <form action="../controllers/editarCategoria.php" method="POST">
 <input type="hidden" name="id" value="<?php echo $category->id; ?>">
     		<br>
			<div class="form-group">
				<label for="name">Nombre</label>
            <input value="<?php echo $category->name; ?>" required name="nombre" type="text" id="nombre" class="form-control">
			</div>          
                
            <div class="form-group">
				<label for="tipo">tipo</label>
                <input value="<?php echo $category->type; ?>" required name="tipo" type="text" id="tipo" class="form-control">
			</div>
       <br>
       
       <center><button type="submit" class="btn btn-success">Guardar</button> </center>	<br>
</form>
         </div>
 
	<footer>
		<p>
        
                    </div>
        
        <a href="../vista/category.php"><img src="../images/atras.png" width="200" height="60"></a>
    </p>
       <small>copyright</small>
	</footer>
</center>
	
 </body>
</html>


