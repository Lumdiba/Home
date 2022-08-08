<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>HomePage</title>
</head>
<body>
    
    <div class="bodyContainer">

        <!-- navbar -->

        <?php include "Header.php"; ?>

        <!-- headSlider -->
    
        <div class="headslideContainer">

            <div id="heroSlide" class="carousel slide" data-bs-ride="carousel">

                <div class="p-0 carousel-inner" id="imgTargetHeroSlide">

                    <div class="carousel-item active">
                        <img src="images/ban.jpg" alt="banner1" class="d-block">
                    </div>

                    <div class="carousel-item">
                        <img src="images/banner.jpg" alt="banner2" class="d-block">
                    </div>

                </div>


                <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#heroSlide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button id="navig" class="carousel-control-next" type="button" data-bs-target="#heroSlide" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

        </div>

        <!-- trendingSection -->

        <div class="trendContainer">

            <div class="text-start pt-4 pb-2" id="trend">
                <h2 class="m-0 px-5">On Trend Tee's</h2>
            </div>

            <div class="container mt-3 mb-2">

                <div class="row" id="trendRow">

                <?php

                    include_once "dbconnection.php";

                    $sql = $conn->prepare("SELECT * FROM products LIMIT 12;");
                    $sql->execute();

                    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                    $arr = array();
                    $i = 0;
                    if(count($result)){
        
                        foreach($result as $row){
                            echo "<div class='col-lg-2 col-md-3 col-6 p-1'>
                                 <div class='pInfo'>
                                     <span> $row[pname] </span>
                                     <span>&#8377- $row[pprice]</span>
                                 </div>

                                 <div class='imgP'>
                                     <img src='images/$row[pimage]' alt='tee1' width='100%'>
                                 </div>

                                 <div class='btns my-2'>
                                     <button class='buy'><a href='productPage.php?id=$row[pid]'>Check It Out</a></button>
                                 </div>

                             </div>";

                        }
                    }
                    else{
                        echo "Products not found!";
                    }
                    
                ?>

                </div>

            </div>

        </div>

        <!-- JustLaunchedSection -->

        <div class="justLaunched">

            <div class="launched text-start pt-4 pb-2" id="launchSlide">
                <h2 class="m-0 px-5">New Drops</h2>
            </div>

            <div id="launch" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner p-0" id="imgTargetLaunched">

                    <div class="carousel-item active">
                        <img src="images/bann.jpg" alt="banner1" class="d-block" style="width:100%">
                    </div>

                    <div class="carousel-item">
                        <img src="images/bannn.jpg" alt="banner2" class="d-block" style="width:100%">
                    </div>

                </div>


                <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#launch" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button id="navig" class="carousel-control-next" type="button" data-bs-target="#launch" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

        </div>

        <!-- topCategorySection -->

        <div class="topCategory mt-4">

            <div class="category text-start pt-4 pb-2" id="categoryTop">
                <h2 class="m-0 px-5">Top Categories</h2>
            </div>

            <div class="container-fluid">

                <div class="row" id="categoryRow">

                    <div class="col-lg-3 col-4 p-1" id="overPos">
                        <div class="img">
                            <img src="images/cat.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                        <span>Cat</span>
                    </div>

                    <div class="col-lg-3 col-4 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat1.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-4 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat2.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-4 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat3.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-4 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-4 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat2.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-6 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                    <div class="col-lg-3 col-6 p-1 " id="overPos">
                        <div class="img">
                            <img src="images/cat1.jpg" alt="category">
                        </div>
                        <div id="overlay"></div>
                    </div>

                </div>

            </div>

        </div>

        <!-- allCategorySection -->

        <div class="moreCategory mt-4">

            <div class="text-start pt-4 pb-2" id="categorySlide">
                <h2 class="m-0 px-5">Explore All Categories</h2>
            </div>

            <div id="cate" class="carousel slide" data-bs-ride="carousel">

                <div class="p-0 carousel-inner">

                    <div class="carousel-item active">
                        
                        <div class="">

                            <div class="row">

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat1.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat2.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat1.jpg" alt="Product">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="carousel-item">
                        
                        <div class="">

                            <div class="row">

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat3.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat1.jpg" alt="Product">
                                    </div>
                                </div>

                                <div class="col-3 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat.jpg" alt="Product">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#cate" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button id="navig" class="carousel-control-next" type="button" data-bs-target="#cate" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>

            <div class="catebtn py-3">
                <button id="explcate"><h4 class=" m-0 py-1">explore Categories</h4><i class="ri-arrow-right-s-line"></i></button>
            </div>

        </div>

        <!-- jumpotron -->

        <div class="container jumptron my-4">

            <div class="container py-3">
                <h4 class="text-center">USE COUPON - <strong class="text-decoration-underline">FIRSTORDER</strong> - AND GET UPTO 30% OFF ON YOUR FIRST ORDER!</h4>
                <h4 class="text-center text-decoration-underline">GRAB NOW!</h4>
            </div>

        </div>

        <!-- recentTeeSection -->

        <div class="recentContainer">

            <div class="text-start pt-4 pb-2" id="recent">
                <h2 class="m-0 px-5">Most Recent Tee's</h2>
            </div>

            <div class="container mt-2 mb-2">

            <div class="row mx-" id="trendRow">

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>
                    
                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>  

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>
                    
                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>
                    
                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>
                    
                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Cute Charmy</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p1.jpg" alt="tee1" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>
                    
                </div>

                <div class="col-lg-2 col-md-3 col-6 p-1">

                    <div class="pInfo">
                        <span>Black Clover</span>
                        <span>&#8377- 599</span>
                    </div>

                    <div class="imgP">
                        <img src="images/p2.jpg" alt="tee2" width="100%">
                    </div>

                    <div class="btns my-2">
                        <button class="buy"><a href="productPage.php">Check It Out</a></button>
                    </div>

                </div>

                </div>

            </div>

        </div>

        <!-- specialTeeSection -->

        <div class="specialConatiner">

            <div class="text-start pt-4 pb-2" id="specialSlide">
                <h2 class="m-0 px-5">Special Tee's</h2>
            </div>

            <div id="specialSlider" class="carousel slide" data-bs-ride="carousel">

                <div class="container p-0 carousel-inner">

                    <div class="carousel-item active">
                        <div class="container">

                            <div class="row">

                                <div class="col-4 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat1.jpg" alt="Product" width="100%">
                                    </div>
                                </div>

                                <div class="col-4 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat2.jpg" alt="Product" width="100%">
                                    </div>
                                </div>

                                <div class="col-4 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat.jpg" alt="Product" width="100%">
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
                                        <img src="images/cat3.jpg" alt="Product" width="100%">
                                    </div>
                                </div>

                                <div class="col-4 p-1">
                                    <div class="imgSlide">
                                        <img src="images/tee3.jpg" alt="Product" width="100%">
                                    </div>
                                </div>

                                <div class="col-4 p-1">
                                    <div class="imgSlide">
                                        <img src="images/cat.jpg" alt="Product" width="100%">
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

        </div>

        <!-- gap -->

        <div class="gap">
            <div class="text-center py-4 mb-5">
                <h5 class="m-0 px-5">companyName.com</h5>
            </div>
        </div>

        <div class="info">
            <div class="container-fluid">

                <div class="row my-1 gy-2" id="infoService">
                    <div class="col-md-3 col-6 px-1">
                        <div class="py-1">
                            <i class="ri-truck-fill"></i>
                            <span>Free Delivery Option</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 px-1">
                        <div class="py-1">
                            <i class="ri-creative-commons-sa-fill"></i>
                            <span>Easy Return Option</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 px-1">
                        <div class="py-1">
                            <i class="ri-customer-service-2-fill"></i>
                            <span>24/7 Customer Support</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 px-1">
                        <div class="py-1">
                            <i class="ri-exchange-fill"></i>
                            <span>Easy Replacement</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- contactInfo -->

        <div class="contactInfo">
            <div class="container">
                <div class="row my-5" id="conInfo">

                    <div class="col-6">
                        <h3>Courier Partners</h3>
                    </div>

                    <div class="col-6">
                        <h3>Follow Us</h3>
                    </div>

                    <div class="col-6">
                        <h6>Delhivery</h6>
                    </div>

                    <div class="col-6">
                        <i class="ri-facebook-circle-fill"></i>
                        <h6>FaceBook</h6>
                    </div>

                    <div class="col-6">
                        <h6>BlueDart</h6>
                    </div>

                    <div class="col-6">
                        <i class="ri-instagram-fill"></i>
                        <h6>instagram</h6>
                    </div>

                    <div class="col-6">
                        <h6>E-Com Express</h6>
                    </div>

                    <div class="col-6">
                        <h4 class="my-1">Contact Us</h4>
                    </div>

                    <div class="col-6">
                        <h6>Amazon Delivery</h6>
                    </div>

                    <div class="col-6">
                        <i class="ri-whatsapp-fill"></i>
                        <h6>9999545452</h6>
                    </div>

                    <div class="col-6">
                        <h6>XpressBees</h6>
                    </div>

                    <div class="col-6">
                        <i class="ri-mail-fill"></i>
                        <h6>connect@Cname.com</h6>
                    </div>

                </div>
                <div class="row my-3">
                    <div class="col-12 text-center" id="forUnderline">
                        <h4>Ships all Over India.</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- securePayment -->

        <div class="payment">

            <div class="container-fluid">

                <div class="row text-center py-3 gy-4" id="pay">

                    <div class="col-12">
                        <img src="images/rupay.png" alt="rupayCard" width="100px">
                        <img src="images/upi.png" alt="upi" width="100px">
                        <img src="images/mc.png" alt="mc" width="100px">
                        <img src="images/cod.png" alt="CashOn Delivery" width="100px">
                    </div>

                    <div class="col-12 text-center">
                        <h5>100% SECURE PAYMENT.</h5>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer -->

        <div class="footer">

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
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script> -->

</body>
</html>