<?php
require('funciones.php');
add_member($_POST['last_name'], $_POST['first_name'], $_POST['addres'], $_POST['city'], $_POST['phone']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
