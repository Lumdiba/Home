<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Account</title>
</head>
<body>

    <div class="accountContainer">

    <?php include "Header.php"; ?>

        <div class="text-start py-4" id="headTitle">
            <h2 class="m-0 px-5 py-1">My Account</h2>
        </div>

        <div class="container d-flex justify-content-center pt-3">
            <div class="avatar">
                <img src="images/logon.png" alt="avatar">
            </div>
        </div>

        <div id="myAcc">
    
                <div class="container my-4">
                    
                        <div>
                            <button><a href="#">Orders</a></button>
                        </div>
                        <div>
                            <button><a href="#">Addresses</a></button>
                        </div>
                        <div>
                            <button><a href="#">My Profile</a></button>
                        </div>
                        <div>
                            <button><a href="login/logout.php">Log Out</a></button>
                        </div>
                     
                </div>
        </div>

        <div class="footer fixed-bottom">

            <div class="container-fluid">

                <div class="row text-center py-3" id="foot">
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