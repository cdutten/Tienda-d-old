<?php include('inc/functions.php');
include("inc/consultaProductos.php");
?>
<?php 
$tituloPagina = "Productos";
$activePage = "Productos";
include('inc/header.php'); 


?>


  <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Bienvenidos a <strong>Tienda D</strong></h1>
    <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
  </div>
</div>

<div class="container">
  <div class="row">
   <!-- Productos -->
    <?php 
       while($rows = $row->fetch_assoc()) {
        $resultado[] = $rows;
        }

      foreach ($resultado as $row_id => $row) { 
      echo portada($row_id, $row);
      } ?>
  </div> <!--/ Productos-->
</div>   
<hr> 

 <?php include('inc/footer.php'); ?>