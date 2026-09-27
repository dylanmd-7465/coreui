<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
// $consulta="SELECT * FROM usuarios";  //consulta
// $resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> ADICIONAR PRODUCTO </h4>
        </div>
        <div class="card-body">

        <form action="modules/products/store.php" method="post">
          PRODUCTO: <input class="form-control" type="text" name="producto"><br>
          DETALLES: <input class="form-control" type="text" name="detalles"><br>
          PU: <input class="form-control" type="text" name="pu"><br>
          OBSERVACIONES: <input class="form-control" type="text" name="obs"><br>
          <input type="submit" class="btn btn-success" value="REGISTRAR">
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
