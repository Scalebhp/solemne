<?php
$servername="localhost";
$username="root";
$password="";
$dbname="solemne3";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Coneccion rechazada.".$conn->connect_error);
} else {
    
    $stmt=$conn->prepare("INSERT INTO usuario(Rut)
            VALUES(?)");
    $stmt->bind_param("s", $Rut);
    $Rut=$_POST['Rut'];
    $stmt->close();
    $conn->close();
}