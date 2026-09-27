<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM clientes";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> CLIENTES 
              <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
          <a href="modules/clientes/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>
          <?php }?>
          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>nom_comercial</th>
            <th>nom_legal</th>
            <th>nit</th>
            <th>direccion</th>
            <th>telf</th>
            <th>Rubro</th>
              <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
            <th>ACCIONES</th>
             <?php }?>
          </tr>
           <?php while($dato=mysqli_fetch_array($resultado)){ ?>
          
            <tr>
              <td><?=$dato['id']?></td>
              <td><?=$dato['nom_comercial']?></td>
              <td><?=$dato['nom_legal']?></td>
              <td><?=$dato['nit']?></td>
              <td><?=$dato['direccion']?></td>
              <td><?=$dato['telf']?></td>
              <td><?=$dato['Rubro']?></td>
              <td>
                <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
                <?php if($user['nivel']=='A'){ ?>
                <a href="modules/clientes/delete.php?id=<?=$dato['id']?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a <?=$dato['nom_comercial']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <?php }?>
                <a href="modules/clientes/edit.php?id=<?=$dato['id']?>" class="btn btn-warning">
                <i class="fas fa-edit"></i>  
                Editar</a>
                <?php }?>
            </td>
            </tr>
          <?php } ?>
        </table>
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
