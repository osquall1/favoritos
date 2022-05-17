<!DOCTYPE html>
<html lang="es">
<head> <!--inicio titulo-->
     
  
  <meta charset="utf-8">
          
        <meta name="Language" content="español">
    <title>crear cuenta</title><!--titulo de la pagina-->
    <link rel="shortcut icon" href="Images/favicon.ico"/>
      <link rel="stylesheet" href="../estilo/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).load(function()
{
    $('#myModal').modal('show');
});
</script>
   
   </head>  
   
<body class="cuerpo">
    
    
    <center> <h1>Crear cuenta</h1> </center>    
    <center> 
        
        <br>
<div class="artE" > 
 <form action="../controllers/insertar.php" method="POST">
     		<br>
			<div class="form-group">
				<label for="nombre">Nombre</label>
                <input  required name="nombre" type="text" id="nombre" placeholder="Coloque su nombre" class="form-control">
			</div>         
                
            <div class="form-group">
				<label for="apellido">apellido</label>
                <input  required name="apellido" type="text" id="apellido" placeholder="Colque su aplellido" class="form-control">
			</div>  
            <div class="form-group">
				<label for="documetn">Numero documento</label>
                <input  required name="documento" type="text" id="documento" placeholder="Colque su numero de documento" class="form-control">
			</div>  
                
                <div class="form-group">
				<label for="email">correo electronico</label>
         <input  required name="mail" type="text" id="mail" placeholder="coloque su correo electronico" class="form-control">
		</div>	

        <div class="form-group">
				<label for="nombre">contraseña</label>
                <input  required name="pass" type="password" id="pass" placeholder="*****" class="form-control">
			</div>
       <br>
       
       <center><button type="submit" class="btn btn-success">Guardar</button> </center>	<br>
		</form>
</div>
 
     <a href="../index.php"><img src="../images/atras.png" width="200" height="60"></a>
 <!--pie de pagina-->

	<footer>
		<p>
     
    </p>
       <small>copyright</small>
	</footer>
</center>
	
 </body>
</html>

