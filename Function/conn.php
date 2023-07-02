<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mtextile";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        header("location: 404.php");
    }
?>