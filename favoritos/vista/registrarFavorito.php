<?php
    
    require "../models/conexionPDO.php";
    session_start();
    if (!isset($_SESSION['user'])&& $_SESSION['user']==null) {
        header("location: index.php");
    }
    $categories =$conn->query("select * from categorias");

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
  
    
    
    <center> <h1>Registrar Url favorita</h1> </center>

    
    <center> 
        
        <br>
<div class="artE" > 

 
 <form action="../controllers/crearFavorito.php" method="POST">
     		<br>
			<div class="form-group">
				<label for="title">Titulo</label>
            <input required name="titulo" type="text" id="titulo" class="form-control">
			</div>
            
                
            <div class="form-group">
				<label for="url">Url o pagina</label>
                <input required name="pagina" type="text" id="pagina" class="form-control">
			</div>                
               
			
        <label for="category">Seleccione la categoria:</label>

        <select required name="category" type="text" id="category" class="form-control">
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

<div class="form-group"><label for="descripcion">descripcion</label>	
            <center>
            
            <td width="auto">
            <textarea   rows="7" id="descripcion" size="auto" name="descripcion" cols="30%" required></textarea></td>
           </center>
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


