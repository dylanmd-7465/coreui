<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=$_GET['id'];
$consulta="SELECT * FROM usuarios WHERE id={$id}";  //consulta
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

        <form action="modules/users/update.php" method="post">
          <input class="form-control" type="hidden" name="id" value="<?=$dato['id']?>"><br>
          NOMBRE: <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
          CUENTA: <input class="form-control" type="text" name="cuenta" value="<?=$dato['cuenta']?>"><br>
          PASSWORD: <input class="form-control" type="text" name="password" value=""><br>
          NIVEL:
          <select name="nivel" id="nivel" class="form-control" >
            <option value="A" <?php if($dato['nivel']=='A'){ echo 'selected'; } ?>>Administrador</option>
            <option value="O" <?php if($dato['nivel']=='O'){ echo 'selected'; } ?>>Operador</option>
            <option value="V" <?php if($dato['nivel']=='V'){ echo 'selected'; } ?>>Visualizador</option>
          </select><br>
          ESTADO DEL USUARIO: <br>
          <?php if($dato['activo']=='1'){ ?>
            <a href="modules/users/activo.php?id=<?=$dato['id']?>&nuevo=0" class="btn btn-secondary" onclick="return confirm('¿Esta seguro de Desactivar a <?=$dato['nombre']?>?')">
                Desactivar
            </a>
            <?php }else{ ?>
            <a href="modules/users/activo.php?id=<?=$dato['id']?>&nuevo=1" class="btn btn-success" onclick="return confirm('¿Esta seguro de Activar a <?=$dato['nombre']?>?')">
                Activar
            </a>
            <?php } ?> <br> <br>
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
