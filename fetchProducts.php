<?php

    include "dbconnection.php";

    $sql = $conn->prepare("SELECT * FROM products;");
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    $arr = array();

    if(count($result)){
        foreach($result as $row){
            $arr[] = $row;
        }
    }
    else{
        echo "Products not found!";
    }

    // echo json_encode($arr);
    
?>