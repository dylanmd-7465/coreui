<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=$_GET['id'];
$consulta="SELECT * FROM clientes WHERE id={$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
  <div class="row">

    <div class="col-md-12">
       <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> MODIFICAR CLIENTE
          </h4>
        </div>
        <div class="card-body">

        <form action="modules/clientes/update.php" method="post">
          <input class="form-control" type="hidden" name="id" value="<?=$dato['id']?>"><br>
          NOMBRE COMERCIAL: <input class="form-control" type="text" name="nom_comercial" value="<?=$dato['nom_comercial']?>"><br>
          NOMBRE LEGAL: <input class="form-control" type="text" name="nom_legal" value="<?=$dato['nom_legal']?>"><br>
          NIT: <input class="form-control" type="text" name="nit" value="<?=$dato['nit']?>"><br>
          DIRECCION: <input class="form-control" type="text" name="direccion" value="<?=$dato['direccion']?>"><br>
          TELEFONO: <input class="form-control" type="text" name="telf" value="<?=$dato['telf']?>"><br>
          RUBRO: <input class="form-control" type="text" name="Rubro" value="<?=$dato['Rubro']?>"><br>
          <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
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
