<?php 
    require_once 'funciones.php';
    delete_copia($_GET['id']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>