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
        <div class=" p-auto ">
          <img src="logo.jpg" alt="logo" />
        </div>
      </div>
      <div class="row p-auto pt-4">
        <div class=" p-auto">
          <h1 class="">Lectura tabla</h1>
        </div>
      </div>
      <div class="row p-auto pt-4">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Apellido</th>
              <th scope="col">Nombre</th>
              <th scope="col">Direccion</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Telefono</th>
              <th scope="col">Fecha de ingreso</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $miembros = returnmiembros();
            ?>
            <?php foreach ($miembros as $miembro) : ?>
              <tr>
                <th><?php echo $miembro['member_id']; ?></th>
                <td><?php echo $miembro['last_name']; ?></td>
                <td><?php echo $miembro['first_name']; ?></td>
                <td><?php echo $miembro['addres']; ?></td>
                <td><?php echo $miembro['city']; ?></td>
                <td><?php echo $miembro['phone']; ?></td>
                <td><?php echo $miembro['join date']; ?></td>
                <td><a href="eliminar_members.php?id=<?= $miembro['member_id'] ?>">
                    <div class="btn btn-warning">eliminar</div>
                  </a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="row p-auto pt-4">
        <div class=" p-auto">
          <h1 class="">Agregar Miembro</h1>
        </div>
        <div class="row p-auto pt-4">
          <form action="crear_miembro.php" method="post">
            <div class="form-group">
              <label for="Apellido">Apellido</label>
              <input type="text" class="form-control" name="last_name" id="Apellido" aria-describedby="emailHelp" placeholder="Apellido"> 
            </div>
            <div class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" class="form-control" name="first_name" id="Nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="Direccion">Direccion</label>
              <input type="text" class="form-control" name="addres" id="Direccion" placeholder="Direccion">
            </div>
            <div class="form-group">
              <label for="Ciudad">Ciudad</label>
              <input type="text" class="form-control" name="city" id="Ciudad" placeholder="Ciudad">
            </div>
            <div class="form-group">
              <label for="Telefono">Telefono</label>
              <input type="text" class="form-control" name="phone" id="Telefono" placeholder="Telefono">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>