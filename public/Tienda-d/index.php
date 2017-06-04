<?php 
include("inc/consultaProductos.php");
include('inc/functions.php'); ?>
<?php 
  $tituloPagina = "Inicio Tienda D";
  $activePage = "Inicio";
include('inc/header.php'); 
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="main main-raised">
      <div class="container">
        <h1>Bienvenidos a <strong>Tienda D </strong></h1>
        <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
      </div>
  </div><!-- Jumbotron -->
  
   <!-- Productos Destacados -->
  <div class="container">
    
    <div class="row"> 
      <?php
        while($rows = $row->fetch_assoc()) {
        $resultado[] = $rows;
        }

       $x= 1;
       while($x <= 3 AND list($row_id, $row) = each($resultado) ) {
         echo portada($row_id, $row);
         $x++;
        } 
        ?>
    </div> <!--/ Productos Destacados-->
  </div>   
  <hr> 

<?php include('inc/footer.php'); ?>