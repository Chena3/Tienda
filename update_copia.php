<?php
require_once 'funciones.php';
update_copia($_GET['id']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
