<?php

require('funciones.php');
delete_member($_GET['id']);
header('Location: ' . $_SERVER['HTTP_REFERER']);

