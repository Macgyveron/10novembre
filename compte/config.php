<?php
$local = "localhost";
$user = "root";
$password = "";
$nomdb = "compte";

$conn = new mysqli($local,$user,$password,$nomdb);
if ($conn->connect_error){
    die ("connexion erreure".$conn->connect_error);
}

$nom = $_POST["nom"];
$email = $_POST["email"];
$password = $_POST["password"];


$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO compteuser (nom, email, password) VALUES ('$nom', '$email', '$passwordhash')";
if ($conn->query($sql) === TRUE) {
    echo "utilisateur ajouter avec succes";
 }else{
    echo "veuiller recommencer".$sql;
 }
header("location:confirme.php");
?>