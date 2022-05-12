<?php
require('funciones.php');
update_member($_POST['id'], $_POST['last_name'], $_POST['first_name'], $_POST['addres'], $_POST['city'], $_POST['phone']);
header('Location: ' . "mantenimiento-miembros.php");