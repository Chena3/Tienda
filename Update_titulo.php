<?php
require('funciones.php');
update_titulo($_POST['id'], $_POST['title'], $_POST['description'], $_POST['rating'], $_POST['category'], $_POST['release_date']);
header('Location: ' . "Mantenimiento-titulo.php");