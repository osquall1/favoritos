
<?php

if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "../models/conexionPDO.php";
$sentencia = $conn->prepare("SELECT id, title, url, description, categoryAsoc, visible FROM favorite WHERE id = ?;");
$sentencia->execute([$id]);
$favorite = $sentencia->fetchObject();
if (!$favorite) {
    #No existe
    echo "¡No exist ese ID!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head> <!--inicio titulo-->
     
  
  <meta charset="utf-8">
          
        <meta name="Language" content="español">
    <title>registrar url</title><!--titulo de la pagina-->
      <link rel="stylesheet" href="../estilo/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>   
   </head> 
  
<body class="cuerpo">   
    
    <center> <h1>Editar Url favorita</h1> </center>

    
    <center> 
        
        <br>
<div class="artE" > 

 
 <form action="../controllers/editarFavorito.php" method="POST">
 <input type="hidden" name="id" value="<?php echo $favorite->id; ?>">
     		<br>
			<div class="form-group">
				<label for="title">Titulo</label>
            <input value="<?php echo $favorite->title; ?>" required name="titulo" type="text" id="titulo" class="form-control">
			</div>
            
                
            <div class="form-group">
				<label for="url">Url o pagina</label>
                <input value="<?php echo $favorite->url; ?>" required name="pagina" type="text" id="pagina" class="form-control">
			</div>                
               
			
        <label for="category">Seleccione la categoria:</label>

        <select required name="category" type="text" id="category" class="form-control">
        <?php
        $categories =$conn->query("select * from categorias");?>
         <option selected="" value=""> </option>
        <?php foreach($categories as $p):?>
        <option value="<?php echo $p['id']; ?>"><?php echo $p['name']; ?></option>
        <?php endforeach; ?>
      </select>

      <label for="dependencia">visible:</label>

<select required name="visible" type="text" id="visible" class="form-control">
<option value="si">Si</option>
<option value="no">No</option>
</select> 

<div class="form-group">
				<label for="descripcion">Descripcion</label>
<input value="<?php echo $favorite->description; ?>" required name="descripcion" type="text" id="descripcion" placeholder="Descripcion" class="form-control">
			</div>	      
	
       <br>
       
       <center><button type="submit" class="btn btn-success">Guardar</button> </center>	<br>
</form>
         </div>
 
	<footer>
		<p>
        
                    </div>
        
        <a href="../vista/mainmenu.php"><img src="../images/atras.png" width="200" height="60"></a>
    </p>
       <small>copyright</small>
	</footer>
</center>
	
 </body>
</html>


