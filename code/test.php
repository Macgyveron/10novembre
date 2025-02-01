<?php
session_start();

$con = mysqli_connect("localhost","root","","action");

if(!isset($_POST['move1'])){
$sql = mysqli_query($con,"SELECT * FROM cool WHERE (username = '$name',code = '$code')");
if ($con->query($sql) === TRUE) {
    //echo "utilisateur ajouter avec succes";


    if ($name && password_verify($code, $name['password'])) {
        $_SESSION['username'] = $name['username'];
        $_SESSION['role'] = $name['role'];
        if ($namer['role'] === 'admin') {
            header('Location: admin.php');
        } else {
            header('Location: user.php');
        }
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
}
?>