<?php
    
        include_once "dbconnection.php";

        // if(isset($_POST['submitLogin'])){

            $emailLogin = "axelumdi@gmail.com";
            // $nameLogin = $_POST['nameLogin'];
            // $passwordLogin = $_POST['passwordLogin'];

            $sql = $conn->prepare("SELECT * FROM users WHERE uemail = '$emailLogin';");
            $sql->execute();

            $r = $sql->fetch(PDO::FETCH_ASSOC);

            $arr = array();

            if(count($r)){
                foreach($r as $k=>$v){
                    $arr[$k] = $v;
                }
                
            }
            else{
                echo "Account Does Not Exist! Please Register!";
            }
            echo "<pre>";
            print_r($arr);
            echo "<br>";
            print_r($r);
            echo "</pre>";
        // }

?>