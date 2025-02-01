<?php
//if(isset($_POST['move'])){
    session_start();
    $host = "localhost";
    $user = "root";
    $passward = "";
    $nomdb = "action";

    $con = new mysqli($host,$user,$password,$nomdb);
    if ($con->connect_error ){
        die ("connection ereure".$con->connect_error );
    }
    //if(isset($_POST['role'])){
      //  $_SESSION['role'] == $_SESSION['admin']['user'];
    //}
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $code = $_POST['code'];
    $rol = $_POST['role'] ;
    if(!empty("username") && !empty("code") && !empty("role")){
    $sql = "INSERT INTO cool (username,code,role) VALUES ('$name','$code','$rol')";
    }


    if ($con->query($sql) === TRUE) {
        echo "utilisateur ajouter avec succes";

    }

}

header("location:conn.php");
?>