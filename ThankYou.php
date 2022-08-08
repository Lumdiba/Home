<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You</title>
</head>
<body>
    
    <div class="thankYouContainer">

    <?php include "Header.php"; ?>

        <div class="container text-start py-3" id="headTitleTY">
            <h2 class="m-0">Thank You!</h2>
            <h2 class="m-0">Thank You!</h2>
            <h2 class="m-0">Thank You!</h2>
        </div>

        <div class="orderReceived container my-4">
            <div>
                <h3 class="text-center">We Have Received Your Order.</h3>
                <h3 class="text-center">You Will Be Mailed Your Tracking Number In Your Registered e-mail And Your Account After The Package Is Dispatched.</h3>
                <h3 class="text-center my-4">Please Contact Our Social Team For Any Query.</h3>
                <h3 class="text-center my-4">companyname.com</h3>
            </div>
        </div>

        <div class="container">
            <div class="pyml">
                <div class="mb-4" id="headTitlepyml">
                    <h2 class="m-0 text-center py-1">Products You May Like</h2>
                </div>

                <div id="specialSlider" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">

                                <div class="row">

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">

                                <div class="row">

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product" width="100%">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#specialSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button id="navig" class="carousel-control-next" type="button" data-bs-target="#specialSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

                <div class="container border my-4 py-2" id="sm">
                    <div>
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-instagram-fill"></i>
                        <i class="ri-whatsapp-fill"></i>
                        <i class="ri-pinterest-fill"></i>
                        <div class="socialFrd"><h5 class="m-0">Share With Friends</h5></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer">

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