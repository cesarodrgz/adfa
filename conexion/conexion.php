<?php 

$servidor = "mysql:dbname=adfa;host:localhost";
$usuario = "root";
$password = "";

try{
    $pdo = new PDO($servidor,$usuario,$password);
    echo "Conectado con exito";
}catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
}