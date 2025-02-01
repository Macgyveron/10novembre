<?php 
$local = "localhost";
$user = "root";
$password = "";
$nomdb = "compte";

$conn = new mysqli($local,$user,$password,$nomdb);
if ($conn->connect_error){
    die ("connexion erreure".$conn->connect_error);
}  

$email = $_POST['nom'];
$password = $_POST['password'];
//$ver = password_verify($password, $sql['password']);

$sql = "SELECT * FROM compteuser (email, password) WHERE $email = ?, $password = ?";
if($conn->query($sql) === TRUE){
    header('location:perso.php');
}