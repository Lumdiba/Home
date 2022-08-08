<?php session_start(); session_destroy();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart</title>
</head>
<body>

    <div class="cartContainer">

    <?php include "Header.php"; ?>

        <div class="cartBody">
            <div class="text-start py-4" id="headTitle">
                <h2 class="m-0 px-5 py-1">Your Cart</h2>
            </div>

            <div class="container" id="addToCart">

                <div class="row mt-2" id="cartBodyProduct">

                    <?php
    
                        if(isset($_SESSION['pCart'])){

                            foreach($_SESSION['pCart'] as $data){
                            
                            echo "<div class='col-3 p-0 my-2 d-flex align-items-center justify-content-center' id='blckBG'>
                                        <img src='images/$data[pimage]' alt='product'>
                                    </div>
                                    <div class='col-8 my-2' id='cartPD'>
                                        <h6 class='text-center'>$data[pname]</h6>
                                        <h6 class='text-center'>Color</h6>
                                        <h6 class='text-center'>Size</h6>
                                        <h6 class='text-center'>qty</h6>
                                        <h6 class='text-center'>$data[pprice]</h6>
                                    </div>
                                    <div class='col-1 p-0 my-2' id='removeBTN'>
                                        <button id='removeCart'><i class='ri-delete-bin-2-fill'></i></button>
                                    </div>";
                            }
                        }
                        else{
                            echo "<div class='text-center text-danger'>Empty Cart</div>";
                        }
                    
                    ?>
                    
                </div>

            </div>

                <div class="checkout my-3">
                    <button id="checkout"><h4 class="m-0"><a href="checkout.php">Check Out</a></h4></button>
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