<?php    
  require "../models/conexionPDO.php";
  $sentencia = $conn->query("SELECT a.id, a.title,a.url,a.description,a.categoryAsoc,a.visible, b.name FROM favorite a LEFT JOIN categorias b ON a.categoryAsoc = b.id WHERE a.visible= 'si'");
  $favoritos = $sentencia->fetchAll(PDO::FETCH_OBJ);
   
   
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
 
       <center>
       <h2>Registro de  favoritos </h2>
       </center>     
    
<div class="borde2">
<div class="col-12">

          <center><h1><span>Listado</span></h1></center>

          <div class="table-responsive">          
          <table id="example" class="display" style="width:100%">
          <thead> 
          <tr>
              <th>Titulo</th>
              <th>pagina</th>
              <th>descripcion</th>
              <th>categoria</th>                           
            </tr>
           </thead>
           <tbody>  
            
               <?php foreach($favoritos as $favorito){ ?>
              <tr>  
                <td><?php echo $favorito->title ?></td>
							  <td><?php echo $favorito->url ?></td>
							  <td><?php echo $favorito->description ?></td>
							  <td><?php echo $favorito->name ?></td>               
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
        <a href="../index.php"><img src="../images/atras.png" width="200" height="60"></a>
        </center>
   
  <div class="foot">
    <p>Pie pagina <a href="" target="_blank"></a></p>
  </div>
</body>
</html> 
       