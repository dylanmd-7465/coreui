<?php
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');
//$conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$id=$_GET['id'];
$consulta="SELECT * FROM proveedor WHERE id={$id}";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta //aca es una matriz
$dato=mysqli_fetch_array($resultado);  //esto es ya un array


?>
  <div class="row">

    <div class="col-md-12">
       <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> MODIFICAR PROVEEDORES
          </h4>
        </div>
        <div class="card-body">

        <form action="modules/proveedor/update.php" method="post">
          <input class="form-control" type="hidden" name="id" value="<?=$dato['id']?>"><br>
          NOMBRE: <input class="form-control" type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
          NIT: <input class="form-control" type="text" name="nit" value="<?=$dato['nit']?>"><br>
          REGIMEN: <br>
               <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="regimen" id="regimenN" value="N" <?= $dato['regimen'] == 'N' ? 'checked' : '' ?>>
                <label class="form-check-label" for="regimenN">Nacional</label>
           </div>
    
            <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="regimen" id="regimenI" value="I" <?= $dato['regimen'] == 'I' ? 'checked' : '' ?>>
            <label class="form-check-label" for="regimenI">Internacional</label>
        </div> <br> <br>
         CATEGORIA: <br>
               <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="categoria" id="cat1" value="1" <?= $dato['categoria'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label" for="cat1">Primera</label>
              </div>
    
            <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="categoria" id="cat2" value="2" <?= $dato['regimen'] == '2' ? 'checked' : '' ?>>
            <label class="form-check-label" for="cat2">Segunda</label>
        </div>
        <div class="form-check form-check-inline">
           <input class="form-check-input" type="radio" name="categoria" id="cat3" value="3" <?= $dato['regimen'] == '3' ? 'checked' : '' ?>>
            <label class="form-check-label" for="cat3">Tercera</label>
            
        </div> <br> <br>
          RUBRO:
          <select name="rubro" id="rubro" class="form-control" >
            <option value="Energia" <?php if($dato['rubro']=='Energia'){ echo 'selected'; } ?>>Energia</option>
            <option value="Electromecanica" <?php if($dato['rubro']=='Electromecanica'){ echo 'selected'; } ?>>Electromecánica</option>
            <option value="Mecanica" <?php if($dato['rubro']=='Mecanica'){ echo 'selected'; } ?>>Mecánica</option>
          </select><br>
          FECHA EXPIRACIÓN:
          <input class="form-control" type="date" name="fecha" value="<?= $dato['fecha'] ?>" required> <br>
          <input type="submit" class="btn btn-warning" value="ACTUALIZAR">
          <input type="reset" class="btn btn-danger" value="CANCELAR">
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
