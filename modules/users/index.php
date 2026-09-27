<?php
//mysqli(HOST, USUARIO, CONTRASEÑA, BD)
//conexion desde el script
include('../../config/conexion.php');
include('../../config/verified.php');
include('../../layout/header.php');


// $conexion = new mysqli("localhost", "root", "", "incos2026d");  //CONEXION
$consulta="SELECT * FROM usuarios";  //consulta
$resultado=mysqli_query($conexion,$consulta); //ejecuta la conslta

?>


  <div class="row">

    <div class="col-md-12">
      <div class="card sin_margenes">
        <div id="cabeza" class="card-header bg-dark text-white">
          <h4 class="mb-0"> USUARIOS 
             <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
          <a href="modules/users/create.php" class="btn btn-success">
          <i class="fas fa-plus"></i>   
          Adicionar</a>
          <?php }?>
          </h4>
        </div>
        <div class="card-body">
        <table class="table">
          <tr>
            <th>ID</th>
            <th class="text-center align-middle">NOMBRE</th>
            <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
            <th class="text-center align-middle">CUENTA</th>
            <th class="text-center align-middle" >PASSWORD</th>
            <th class="text-center align-middle">ACCIONES</th>
            <th class="text-center align-middle">ESTADO DEL USUARIO</th>
              <?php }?>
          </tr>
           <?php while($dato=mysqli_fetch_array($resultado)){ ?>
          
            <tr>
              <td><?=$dato['id']?></td>
              <td class="text-center align-middle" ><?=$dato['nombre']?></td>
              <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
              <td class="text-center align-middle"><?=$dato['cuenta']?></td>
              <td class="text-center align-middle"><?=$dato['password']?></td>
              <?php }?>
              <td class="text-center align-middle">
                <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
                <?php if($user['nivel']=='A'){ ?>
                <a href="modules/users/delete.php?id=<?=$dato['id']?>" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar a <?=$dato['nombre']?>?')">
                <i class="fas fa-trash"></i>
                Eliminar</a>
                <?php }?>
                <a href="modules/users/edit.php?id=<?=$dato['id']?>" class="btn btn-warning">
                <i class="fas fa-edit"></i>  
                Editar</a>
                
                <?php }?>
            </td>
               <td class="text-center align-middle">
                <?php if($user['nivel']=='A'|| $user['nivel']=='O'){ ?>
                 <?php if($dato['activo']=='1'){ ?>
                 <span class="badge text-success bg-success-subtle border border-success-subtle">Activo</span>
                  <?php }else{ ?>
                <span class="badge text-danger bg-danger-subtle border border-danger-subtle">Inactivo</span>
               <?php } ?>
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
