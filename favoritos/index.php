
<!DOCTYPE html>
<html lang="es">
<head> <!--inicio titulo-->
     
  
  <meta charset="utf-8">
          <meta http-equiv="Content-Type" content="text/html">
        <meta name="Language" content="español">
        <link rel="shortcut icon" href="Images/favicon.ico"/>
    <title>login</title><!--titulo de la pagina-->
      <link rel="stylesheet" href="estilo/estilos.css" type="text/css">
               <script src="Js/docjava.js" type="javascript"></script>
               <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

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
                        <a href="vista/registro" title="registro usuario nuevo" >Registro</a>
                    </li>
                    <li>
                        <a href="vista/favoritos" title="directorio de contactos">Lista Favoritos</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
      <h2>Bienvenido</h2>
  <!--ingreso de datos para ingreso-->
  
 <div class="login-box">
  <h2>Logueo</h2>
  <form id="form1" name="form1" method="post" action="controllers/validaIngreso">
    <div class="user-box">
      <input type="text" name="login" id="login" required="">
      <label>Cuenta de Email</label>
    </div>
    <div class="user-box">
        <input type="password" name="pass" id="pass"  required="">
      <label>Contraseña</label>
    </div>
      <a>
     <span></span>
     <span></span>
     <span></span>
     <span></span>
     <input type="submit"  value="Ingreso" />
         </a>
  </form>
</div>
      
</center>
   
</div>

<center>

    <p> <span class="glyphicon glyphicon-alert" aria-hidden="true"></span> solo para usuarios registrados
    
    </p>

  
 <!--pie de pagina-->
	<footer>
		<p>
       
    </p>
       <small>copyright</small>
	</footer>
</center>

 </body>
</html>
<?php exit(); ?>