<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    <div class="container-fluid">

    <?php include "Header.php"; ?>

        <div class="container border mt-5" id="loginout"> 
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-regis-tab" data-bs-toggle="pill" data-bs-target="#pills-regis" type="button" role="tab" aria-controls="pills-regis" aria-selected="false">Register</button>
                    </li>
                </ul>

                <div class="tab-content my-5" id="pills-inoutContent">
                    <div class="tab-pane fade show active text-center" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab"><?php include "login/login.php"; ?></div>
                    <div class="tab-pane fade text-center" id="pills-regis" role="tabpanel" aria-labelledby="pills-regis-tab"><?php include "login/registration.php"; ?></div>
                </div>

            </div>

            <div class="footer fixed-bottom">

                <div class="container-fluid">

                    <div class="row text-center py-2" id="foot">
                        <div class="col-6">
                            <button id="pripol">Privacy Policy</button>
                        </div>

                        <div class="col-6">
                            <button id="returnpolicy">Return Policy</button>
                        </div>
                    </div>
                </div>
            </div>

    </div>

</body>
</html>