<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM proveedor";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> PROVEEDORES
             <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
          <a href="modules/proveedor/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>
          <?php }?>
          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>NIT</th>
            <th>REGIMEN</th>
            <th>CATEGORIA</th>
            <th>RUBRO</th>
            <th>FECHA EXPIRACIÓN</th>
            <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
            <th>ACCIONES</th>
              <?php }?>
          </tr>
           <?php while($dato=mysqli_fetch_array($resultado)){ ?>
          
            <tr>
              <td><?=$dato['id']?></td>
              <td><?=$dato['nombre']?></td>
              <td><?=$dato['nit']?></td>
              <td> <?php 
               echo ($dato['regimen'] == 'N') ? 'Nacional' : 'Internacional'; 
               ?></td>
               <td> <?php 
               echo ($dato['categoria'] == '1') ? 'Primera' : (($dato['categoria'] == '2') ? 'Segunda': 'Tercera'); 
               ?></td>
              <td><?=$dato['rubro']?></td>
              <td><?=$dato['fecha']?></td>
              <td>
                <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
                <?php if($user['nivel']=='A'){ ?>
                <a href="modules/proveedor/delete.php?id=<?=$dato['id']?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a : <?=$dato['nombre']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <?php }?>
                <a href="modules/proveedor/edit.php?id=<?=$dato['id']?>" class="btn btn-warning">
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
