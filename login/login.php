

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:ital@1&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

    <title>Document</title>
</head>
<body>

    <?php
    
        include_once "dbconnection.php";

        if(isset($_POST['submitLogin'])){

            $emailLogin = $_POST['emailLogin'];
            $nameLogin = $_POST['nameLogin'];
            $passwordLogin = $_POST['passwordLogin'];


            $sql = $conn->prepare("SELECT * FROM users WHERE uemail = '$emailLogin';");
            $sql->execute();

            $r = $sql->fetchAll(PDO::FETCH_ASSOC);

            $arr = array();

            if(count($r)){
                foreach($r as $row){
                    $arr[] = $row;
                }
                $dbpass = $arr[0]['upass'];
                $valid = password_verify($passwordLogin, $dbpass);
                if($valid && $arr[0]['uname'] === $nameLogin){
                    $_SESSION['uName'] = $nameLogin;
                    header('location:../Home.php');
                }
                else{
                    echo "<h3 class='text-center text-danger'>Invalid Credentials!</h3>";
                }
            }
            else{
                echo "<h3 class='text-center text-danger'>Account Does Not Exist With This Email!</h3>";
            }
        }
    ?>
    
    <div class="container d-flex justify-content-center" id="formContainer">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regisForm">

                <h1 class="my-3 text-decoration-underline text-start">LogIn -</h1>

                <label for="fullname">Full-Name : </label><input type="text" name="nameLogin" required>
                <label for="email">E-mail : </label><input type="email" name="emailLogin" id="gmailL" required>
                <label for="password">Password : </label><input type="password" name="passwordLogin" id="pwL" required>
                <br>
                <input type="submit" value="LogIn" name="submitLogin">
        
            </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../script.js"></script>

</body>
</html>