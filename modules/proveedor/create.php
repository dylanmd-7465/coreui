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
          <h4 class="mb-0"> PROVEEDORES </h4>
        </div>
        <div class="card-body">

        <form action="modules/proveedor/store.php" method="post">
          NOMBRE: <input class="form-control" type="text" name="nombre"><br>
          NIT: <input class="form-control" type="text" name="nit"><br>
          REGIMEN:
            <div class="form-group mb-3">
             <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="regimen" id="regimenNacional" value="N" checked>
             <label class="form-check-label" type="radio" for="regimenNacional">Nacional</label>
           </div>
             <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="regimen" id="regimenInternacional" value="I">
              <label class="form-check-label" type="radio" for="regimenInternacional">Internacional</label>
            </div>
          </div>
            CATEGORIA:
            <div class="form-group mb-3">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="cat1" value="1" >
                    <label class="form-check-label" type="radio" for="cat1">Primera</label>
                     </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="categoria" id="cat2" value="2">
                      <label class="form-check-label" type="radio" for="cat2">Segunda</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="categoria" id="cat3" value="3">
                      <label class="form-check-label" type="radio" for="cat3">Tercera</label>
                 </div>
            </div><br>
          RUBRO:
          <select name="rubro" id="rubro" class="form-control" >
            <option value="">Seleccione...</option>
            <option value="Energia" >Energia</option>
            <option value="Electromecanica">Electromecánica</option>
            <option value="Mecanica">Mecánica</option>
          </select><br>
          FECHA EXPIRACIÓN:
          <input class="form-control" type="date" name="fecha"><br>
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
