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
          <h4 class="mb-0"> CLIENTES </h4>
        </div>
        <div class="card-body">

        <form action="modules/clientes/store.php" method="post">
          NOMBRE COMERCIAL: <input class="form-control" type="text" name="nom_comercial"><br>
          NOMBRE LEGAL: <input class="form-control" type="text" name="nom_legal"><br>
          NIT: <input class="form-control" type="text" name="nit"><br>
          DIRECCION: <input class="form-control" type="text" name="direccion"><br>
          TELEFONO: <input class="form-control" type="text" name="telf"><br>
          RUBRO: <input class="form-control" type="text" name="Rubro"><br>

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
