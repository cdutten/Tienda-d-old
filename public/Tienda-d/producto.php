
<?php 

$producto_id = $_GET["id"];

$tituloPagina = "Producto";
$activePage = "Producto";
include('inc/header.php');
?>

<?php  //Pedido a Base de datos
include("inc/conexionMYSQL.php");

function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

$sql = "SELECT * FROM productos WHERE id IN($producto_id)";
$result = $conn->query($sql);


$rows = resultToArray($result);
$result->free();

?>


<div class="jumbotron">
  <div class="container">
    <h1>Bienvenidos a <strong>Tienda D</strong></h1>
    <p>Una Tienda Online amigable con los vendedores y clientes :D</p>
  </div>
</div>

<div class="container"> 
<div class="row"> 
  <div class= "col-md-4">
  <p> <img src = "<?php echo $rows['0']['imagen']; ?>" 
           alt = "<?php echo $rows['0']['nombre']; ?>" class="img-rounded"> </img> </p>
  </div>
  <div class= "col-md-8">
  <h2> <?php echo $rows['0']['nombre']; ?> </h2>
  <p> <?php echo $rows['0']['descripcion']; ?> </p>
  <button type="button" class="btn btn-success">Consultar</button>
  </div>
</div>
<hr>
</div>
 <?php include('inc/footer.php'); ?>