<?php 
    require_once 'funciones.php';
    $titulo = create_copia($_GET['id']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  