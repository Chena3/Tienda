<?php
require('funciones.php');
delete_titulo($_GET['id']);
header('Location: ' . $_SERVER['HTTP_REFERER']);

