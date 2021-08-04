<?php 
try{
    $db = new pdo('mysql:host=localhost;dbname=legion_localhost;charset=utf8','root','root');
}
catch (PDOException $e){
    die($e->getMessage());
}

$con = mysqli_connect("localhost", "root", "root", "legion_localhost");