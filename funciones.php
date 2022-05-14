<?php
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
function returnTitulo(){
    $coneccion = conectar();
    $sql = "SELECT * FROM title";
    return $coneccion->query($sql);
}
function add_titulo($title, $description, $rating, $category, $release_date) {
    $coneccion = conectar();
    $sql = "INSERT INTO title (title, description, rating, category, release_date) VALUES ('$title', '$description', '$rating', '$category', '$release_date')";
    $coneccion->query($sql);
    desconectar($coneccion);
}

function obtener_miembro($id) {
    $coneccion = conectar();
    $sql = "SELECT * FROM member WHERE member_id = $id";
    return $coneccion->query($sql)->fetch_assoc();
}
function  obtener_titulo($id){
    $coneccion = conectar();
    $sql = "SELECT * FROM title WHERE title_id = $id";
    return $coneccion->query($sql)->fetch_assoc();
}
function delete_titulo($id) {
    $coneccion = conectar();
    $sql = "DELETE FROM title WHERE title_id = $id";
    $coneccion->query($sql);
    desconectar($coneccion);
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
function update_member($id, $last_name, $first_name, $addres, $city, $phone) {
    $coneccion = conectar();
    $sql = "UPDATE member SET last_name = '$last_name', first_name = '$first_name', addres = '$addres', city = '$city', phone = '$phone' WHERE member_id = $id";
    $coneccion->query($sql);
    desconectar($coneccion);
}
function update_titulo($id, $title, $description, $rating, $category, $release_date) {
    $coneccion = conectar();
    $sql = "UPDATE title SET title = '$title', description = '$description', rating = '$rating', category = '$category', release_date = '$release_date' WHERE title_id = $id";

    $coneccion->query($sql);
    
    desconectar($coneccion);
}
function getCopias($id){
    $coneccion = conectar();
    $sql = "SELECT * FROM title_copy WHERE title_id = $id";
    return $coneccion->query($sql);
}
function update_copia($id){
    $coneccion = conectar();
    $RESULTADO = $coneccion->query("SELECT status FROM title_copy WHERE copy_id = $id");
    $row = $RESULTADO->fetch_assoc();
    if($row['status'] == 'AVAILABLE'){
        $sql = "UPDATE title_copy SET status = 'RENTED' WHERE copy_id = $id";
    }else{
        $sql = "UPDATE title_copy SET status = 'AVAILABLE' WHERE copy_id = $id";
    }
    $coneccion->query($sql);
    desconectar($coneccion);
}
function delete_copia($id){
    $coneccion = conectar();
    $sql = "DELETE FROM title_copy WHERE copy_id = $id";
    $coneccion->query($sql);
    desconectar($coneccion);
}

function create_copia($id_titulo){
    $coneccion = conectar();
    $sql = "INSERT INTO title_copy (title_id, status) VALUES ('$id_titulo', 'AVAILABLE')";
    $coneccion->query($sql);
    desconectar($coneccion);
}