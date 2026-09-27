<?php
$sw=$_GET['sw'] ?? 0;
?>

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
          <h4 class="mb-0"> Cambio de contraseña </h4>
        </div>
        <div class="card-body">
            <?php if($sw==1){ ?>
        <div class="alert alert-danger">
            Contraseña actual incorrecta, vuelva a intentar!
        </div>
        <?php } ?>
        <?php if($sw==2){ ?>
        <div class="alert alert-warning">
            La nueva contraseña y la confirmación no coinciden!
        </div>
        <?php } ?>

        <form action="modules/account/update_password.php" method="post">
          CONTRASEÑA ACTUAL: <input class="form-control" type="password" name="password_actual"><br>
          NUEVA CONTRASEÑA: <input class="form-control " type="password" name="password_nueva" id="password_nueva"><br>
          <div style="background:#ddd; height:8px; border-radius:4px; margin-top:5px;">
          <div id="medidor-barra" style="height:8px; width:0%; border-radius:4px;"></div>
          </div>
          <span id="medidor-texto"></span><br>
          CONFIRMAR CONTRASEÑA: <input class="form-control" type="password" name="password_confirmar"><br>
          <input type="submit" class="btn btn-success" value="CAMBIAR CONTRASEÑA">
          <input type="reset" class="btn btn-danger" value="CANCELAR">
        </form>
        </div>
      </div>
    </div>
  </div>
<br>
  <div class="modal fade" id="modalCambioObligatorio" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cambio de contraseña obligatorio</h5>
      </div>
      <div class="modal-body">
        Un administrador reseteó tu contraseña. Debes establecer una nueva contraseña segura para continuar usando el sistema.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-coreui-dismiss="modal">Entendido</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php
include('../../layout/footer.php');
?>
<?php if ($user['RequeriCambPassword']=='S'): ?>
<script>
  var modal = new coreui.Modal(document.getElementById('modalCambioObligatorio'));
  modal.show();
</script>
<?php endif; ?>
<script>
document.getElementById('password_nueva').addEventListener('input', function() {
    let valor = this.value;
    let puntos = 0;
  if (valor.length >= 8) { puntos++; }
  if (/[a-z]/.test(valor)) { puntos++; }
if (/[A-Z]/.test(valor)) { puntos++; }
if (/[0-9]/.test(valor)) { puntos++; }
if (/[^A-Za-z0-9]/.test(valor)) { puntos++; }



    let barra = document.getElementById('medidor-barra');
    let texto = document.getElementById('medidor-texto');
  if (puntos <= 1) {
    barra.style.width = '25%';
    barra.style.background = 'red';
    texto.textContent = 'Débil';
    texto.style.color = 'red';
} else if (puntos <= 3) {
    barra.style.width = '60%';
    barra.style.background = 'orange';
    texto.textContent = 'Media';
    texto.style.color = 'orange';
} else {
    barra.style.width = '100%';
    barra.style.background = 'green';
    texto.textContent = 'Fuerte';
    texto.style.color = 'green';
}
    
});
</script>