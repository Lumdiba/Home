

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

    $fullName = $email = $mobileNo = $pw = $cpw = '';
    
    include_once "dbconnection.php";


    if(isset($_POST['submitbtn'])){

        $fullName = $_POST['fullname'];
        $email = $_POST['email'];
        $mobileNo = $_POST['mobno'];
        $pw = $_POST['password'];
        $cpw = $_POST['cpassword'];

        $_SESSION['uName'] = $fullName;

        if($pw != $cpw){
            echo "<h3 class='text-center text-danger'>PassWord Doesn't Match!</h3>";
        }
        elseif(strlen($mobileNo) < 10 || strlen($mobileNo) > 10){
            echo "<h3 class='text-center text-danger'>Invalid mobile number!</h3>";
        }
        else{
            $passw = password_hash($pw, PASSWORD_BCRYPT);
            $cpassw = password_hash($cpw, PASSWORD_BCRYPT);

            $sql = $conn->prepare("SELECT * FROM users WHERE uemail = '$email';");
            $sql->execute();
            $r = $sql->fetchAll(PDO::FETCH_ASSOC);

            if(count($r)){
                echo "<h3 class='text-center text-danger'>Account Already Exist With This Email!</h3>";
            }
            else{
                $sql2 = $conn->prepare("INSERT INTO users VALUES(:id, :uname, :uemail, :umobno, :upass);");
                $sql2->execute(array(':id'=>'', ':uname'=>$fullName, ':uemail'=>$email, ':umobno'=>$mobileNo, ':upass'=>$passw));
                ?> 
                    <script>
                        location.replace("../Home.php");
                    </script>
                <?php
            }
        }
    }

?>
    
    <div class="container d-flex justify-content-center" id="formContainer">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="regisForm">

                <h1 class="my-3 text-decoration-underline text-start">Register -</h1>

                <div class="contrl">
                    <label for="fullname">Full-Name : </label><input type="text" name="fullname" id="nameVal" value="<?php echo $fullName; ?>" required>
                </div>
                <div class="contrl">
                    <label for="email">E-mail : </label><input type="email" name="email" id="gmail" id="emailVal" value="<?php echo $email; ?>" required>
                </div>
                <div class="contrl">
                    <label for="mobile">Mobile no. : </label><input type="text" name="mobno" id="mobno" value="<?php echo $mobileNo; ?>" required>
                    <span id="mobErr"></span>
                </div>
                <div id="dflex" class="contrl">
                    <label for="password">Password : </label><input type="password" name="password" id="pw" value="<?php echo $pw; ?>" required><i class="ri-eye-off-fill" id="togglePassword"></i><span id="passErr"></span>
                </div>
                <div class="contrl">
                    <label for="cpassword">Confirm Password : </label><input type="password" name="cpassword" id="cpw" value="<?php echo $cpw; ?>" required>
                </div>
                <br>
                <input type="submit" value="Create Account" name="submitbtn" id="checkSubmit">
        
            </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../script.js"></script>

</body>
</html>