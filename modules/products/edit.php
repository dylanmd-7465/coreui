<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=$_GET['id'];
$consulta="SELECT * FROM products WHERE id={$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
  <div class="row">

    <div class="col-md-12">
       <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> MODIFICAR USUARIOS 
          </h4>
        </div>
        <div class="card-body">

        <form action="modules/products/update.php" method="post">
          <input class="form-control" type="hidden" name="id" value="<?=$dato['id']?>"><br>
                   PRODUCTO: <input class="form-control" type="text" name="producto" value="<?=$dato['producto']?>"><br>
          DETALLES: <input class="form-control" type="text" name="detalles" value="<?=$dato['detalles']?>"><br>
          PU: <input class="form-control" type="text" name="pu" value="<?=$dato['pu']?>"><br>
          OBSERVACIONES: <input class="form-control" type="text" name="obs" value="<?=$dato['obs']?>"><br> <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
        </form>
        </div>
      </div>
    </div>
    </div>
<br>
       
</body>
</html>
<?php
include('../../layout/footer.php');
?>
