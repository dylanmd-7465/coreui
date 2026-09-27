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
          <h4 class="mb-0"> USUARIOS </h4>
        </div>
        <div class="card-body">

        <form action="modules/users/store.php" method="post">
          NOMBRE: <input class="form-control" type="text" name="nombre"><br>
          CUENTA: <input class="form-control" type="text" name="cuenta"><br>
          PASSWORD: <input class="form-control" type="password" name="password"><br>
          SELECCIONE EL NIVEL:
          <select name="nivel" id="nivel" class="form-control" >
            <option value="A" >Administrador</option>
            <option value="O">Operador</option>
            <option value="V">Visualizador</option>
          </select><br>
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
