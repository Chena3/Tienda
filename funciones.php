<?php
require_once 'conexion.php';
function conectar() {
    $conexion = new mysqli("localhost", "root", "", "mydb");
    if($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
    }   else {
        return $conexion;
    }
}

function desconectar($conexion) {
    $conexion->close();
}

function returnmiembros() {
    $coneccion = conectar();
    $sql = "SELECT * FROM member";
    return $coneccion->query($sql);
}
function delete_member($id) {
    $coneccion = conectar();
    $sql = "DELETE FROM member WHERE member_id = $id";
    $coneccion->query($sql);
    desconectar($coneccion);
}
function add_member($last_name, $first_name, $addres, $city, $phone) {
    $coneccion = conectar();
    $sql = "INSERT INTO member (last_name, first_name, addres, city, phone) VALUES ('$last_name', '$first_name', '$addres', '$city', '$phone')";
    $coneccion->query($sql);
    desconectar($coneccion);
}

