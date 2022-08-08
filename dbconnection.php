<?php

    $serbase = "mysql:host=localhost;dbname=mydatabase";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO($serbase, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Server Connection Error! - " .$e;
    }

?>