<?php
require('funciones.php');
add_titulo($_POST['title'], $_POST['description'], $_POST['rating'], $_POST['category'], $_POST['release_date']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
