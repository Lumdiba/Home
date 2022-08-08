<?php

    session_start();

    include_once "dbconnection.php";

    $data = file_get_contents("php://input");
    $phpassarr = json_decode($data, true);

    $id = $phpassarr['id'];

    $sql = $conn->prepare("SELECT * FROM products WHERE pid=$id;");
    
    if($sql->execute()){
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        $_SESSION['pCart'][] = $result;

        echo json_encode($result);
    }
    else{
        echo "Some Error Occured!";
    }

?>



