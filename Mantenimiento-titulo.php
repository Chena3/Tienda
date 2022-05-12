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
          <a href ="index.php"><img src="logo.jpg" alt="logo" /></a>
        </div>
      </div>
      <div class="row p-auto pt-4">
        <div class=" p-auto">
          <h1 class="">Titulos</h1>
        </div>
      </div>
      <div class="row p-auto pt-4">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Descripción</th>
              <th scope="col">Rating</th>
              <th scope="col">Categoria</th>
              <th scope="col">fecha de lanzamiento</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $Titulos = returnTitulo();
            ?>
            <?php foreach($Titulos as $Titulo): ?>
              <tr>
                <th><?php echo $Titulo['title_id']; ?></th>
                <td><?php echo $Titulo['title']; ?></td>
                <td><?php echo $Titulo['description']; ?></td>
                <td><?php echo $Titulo['rating']; ?></td>
                <td><?php echo $Titulo['category']; ?></td>
                <td><?php echo $Titulo['release_date']; ?></td>
                <td><a href="update_titulos.php?id=<?= $Titulo['title_id'] ?>">
                  <button type="button" class="btn btn-primary">Editar</button>

                </a></td>
                <td><a href="Eliminar_titulo.php?id=<?= $Titulo['title_id'] ?>">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="row p-auto pt-4">
        <div class=" p-auto">
          <h1 class="">Agregar Titulo</h1>
        </div>
        <div class="row p-auto pt-4">
          <form action="crear_titulo.php" method="post">
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Titulo" name="title">
            </div>
            <div class="form-group">
              <label for="description">Descripción</label>
              <input type="text" class="form-control" id="description" placeholder="Descripción" name="description">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating">
            </div>
            <div class="form-group">
              <label for="category">Categoria</label> 
              <input type="text" class="form-control" id="category" placeholder="Categoria" name="category">
            </div>
            <div class="form-group">
              <label for="release_date">Fecha de lanzamiento</label>
              <input type="date" class="form-control" id="release_date" placeholder="Fecha de lanzamiento" name="release_date">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>  
          </form>
          <div>
          <a href="index.php">  <div class="btn btn-warning m-4">Volver</div> </a>
        </div>
        </div>
      
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>