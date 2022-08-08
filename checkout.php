<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CheckOut</title>
</head>
<body>

    <div class="checkoutContainer">

    <?php include "Header.php"; ?>

        <div class="text-start py-4" id="headTitle">
            <h2 class="m-0 px-5 py-1">CheckOut</h2>
        </div>

        <div class="checkoutBody">

            <div class="text-center py-2" id="shipAddress">
                <h2 class="m-0 py-1">Shipping Address</h2>
            </div>

            <div id="form">
                <div class="container my-4">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td colspan="2"><input type="text" placeholder="FullName"></td>
                            </tr>
                            <tr>
                                <td><input id="country" type="text" placeholder="Country"></td>
                                <td><input type="text" class="state" placeholder="State"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" placeholder="Area/Colony/House no."></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" placeholder="Landmarks"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="City"></td>
                                <td><input type="text" placeholder="Mobile no."></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="pincode" placeholder="Pincode"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="email" name="gmail" placeholder="E-mail"></td>
                            </tr>
                        </table>
                        
                    </form> 
                </div>
            </div>

            <div class="container">

                <?php  
                
                    include_once "dbconnection.php";

                    if(isset($_GET['productimg']) && isset($_GET['pname']) && isset($_GET['pprice'])){

                        echo "<div class='row my-2' id='checkoutProImg'>
                        <div class='col-4 p-0 d-flex align-items-center justify-content-center'>
                            <img src='images/$_GET[productimg]' alt='product'>
                        </div>
    
                        <div class='col-8' id='checkProduct'>
                            <h6 class='text-center my-1'>$_GET[pname]</h6>
                            <h6 class='text-center my-1'>Color</h6>
                            <h6 class='text-center my-1'>Size</h6>
                            <h6 class='text-center my-1'>$_GET[pprice]</h6>
                            <h6 class='text-center my-1'>Qty</h6>
                        </div>
    
                    </div>";

                    }
                
                ?>

                <div class="subShipTotal mb-2">
                    <div>
                        <table>
                            <tr>
                                <td><h5>Subtotal : </h5></td>
                                <td><h5><?php echo "$_GET[pprice]"; ?></h5></td>
                            </tr>

                            <tr>
                                <td><h5>Shipping : </h5></td>
                                <td><h5>$$$</h5></td>
                            </tr>

                            <tr>
                                <td><h5>Total : </h5></td>
                                <td><h5>$$$</h5></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="container p-3 my-5" id="cdnb">
                    <div class="paySelect">
                        <h4 class="text-decoration-underline mb-3">Select Your Payment Method</h4>
                    </div>
                    <div class="creditDebNet">
                        <h4 class="m-0"><input type="radio" name="payment"><label>Pay With Credit/Debit/NetBanking.</label></h4>
                        <h5 class="px-5 mb-3">Pay securely with credit/debit.</h5>
                    </div>

                    <div class="cod">
                        <h4><input type="radio" name="payment"><label>Cash On Delivery</label></h4>
                    </div>
                </div>

                <div class="placeOrder">
                    <h3 class="py-2"><a href="ThankYou.php">Go For Buy</a></h3>
                </div>

            </div>

        </div>

        <div class="footer mt-4">

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