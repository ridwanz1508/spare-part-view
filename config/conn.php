<?php 
global $conn;
$conn = new mysqli("localhost", "root", "", "db_latihan");

if($conn->connect_error){
    die("failed connect to database : ".$conn->connect_error);
}
?>