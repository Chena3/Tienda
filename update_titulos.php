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
          <h1 class="">Actualizar Titulos</h1>
        </div>
        <?php
          $id_titulo = $_GET['id'];
          $titulo = obtener_titulo($id_titulo);
        ?>
        <div class="row p-auto pt-4">
          <form action="Update_titulo.php" method="post">
          <input type="hidden" name="id" value="<?=$titulo['title_id'] ?>">  
          <div class="form-group">
          <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" value="<?=$titulo["title"]?>" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Titulo" name="title">
            </div>
            <div class="form-group">
              <label for="description">Descripción</label>
              <input value="<?=$titulo["description"]?>" type="text" class="form-control" id="description" placeholder="Descripción" name="description">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <input value="<?=$titulo["rating"]?>" type="text" class="form-control" id="rating" placeholder="Rating" name="rating">
            </div>
            <div class="form-group">
              <label for="category">Categoria</label> 
              <input value="<?=$titulo["category"]?>" type="text" class="form-control" id="category" placeholder="Categoria" name="category">
            </div>
            <div class="form-group">
              <label for="release_date">Fecha de lanzamiento</label>
              <input value="<?=$titulo["release_date"]?>" type="date" class="form-control" id="release_date" placeholder="Fecha de lanzamiento" name="release_date">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
          </form>
        </div>
      </div>
      <div>
              <form method="post" action="">
                <div class="form-group">
                  <label for="copy_id" class="col-sm-">
                    
                  </label>
                  </div>

              </form>      
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>