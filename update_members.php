<?php
require('funciones.php');

?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tienda de video </title>
</head>

<body>
  <div class="container h-100 pb-5 " style="background-color: aquamarine;">
    <h1 class="center text-center">Tienda de video</h1>
    <div class="container  text-center ">
    
 
      <div class="row p-auto pt-4">
        <div class=" p-auto">
          <h1 class="">Actualizar Miembro</h1>
        </div>
        <?php
          $id_miembro = $_GET['id'];
          $miembro = obtener_miembro($id_miembro);
        ?>
        <div class="row p-auto pt-4">
          <form action="Update_member.php" method="post">
          <input type="hidden" name="id" value="<?=$miembro['member_id'] ?>">  
          <div class="form-group">
              <label for="Apellido">Apellido</label>
              <input type="text" value="<?=$miembro['last_name'] ?>" class="form-control" name="last_name" id="Apellido" aria-describedby="emailHelp" placeholder="Apellido"> 
            </div>
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" value="<?=$miembro['first_name'] ?>" class="form-control" name="first_name" id="Nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="Direccion">Direccion</label>
              <input type="text" value="<?=$miembro['addres'] ?>" class="form-control" name="addres" id="Direccion" placeholder="Direccion">
            </div>
            <div class="form-group">
              <label for="Ciudad">Ciudad</label>
              <input type="text" value="<?=$miembro['city'] ?>" class="form-control" name="city" id="Ciudad" placeholder="Ciudad">
            </div>
            <div class="form-group">
              <label for="Telefono">Telefono</label>
              <input type="text" value="<?=$miembro['phone'] ?>" class="form-control" name="phone" id="Telefono" placeholder="Telefono">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>