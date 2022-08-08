
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product</title>
</head>
<body>

    <div class="productPageCon">

    <?php include "Header.php"; ?>

        <div class="product">

            <?php

                include_once "dbconnection.php";

                if(isset($_GET['id'])){

                    $id = $_GET['id'];

                    $sql = $conn->prepare("SELECT * FROM products WHERE pid = $id;");
                    $sql->execute();

                    $r = $sql->fetch(PDO::FETCH_ASSOC);

                    echo "<div class='text-start pt-4 pb-2' id='headTitle'>
                                <h2 class='m-0 px-5 py-1' data-bs-toggle='collapse' data-bs-target='#collMenu'>$r[pname]</h2>
                            </div>
                            
                        <div class='container-fluid'>

                            <div class='row'>
                                <div class='col-lg-5 col-md-6 col-12 p-0'>
                                    <div id='productSlide' class='carousel slide' data-bs-ride='carousel'>

                                        <div class='carousel-inner'>

                                            <div class='carousel-item active' id='pSlide'>
                                                <img src='images/p1.jpg' alt='banner1' class='d-block'>
                                            </div>

                                            <div class='carousel-item' id='pSlide'>
                                                <img src='images/p2.jpg' alt='banner2' class='d-block'>
                                            </div>

                                        </div>


                                        <button id='navig' class='carousel-control-prev' type='button' data-bs-target='#productSlide' data-bs-slide='prev'>
                                            <span class='carousel-control-prev-icon'></span>
                                        </button>
                                        <button id='navig' class='carousel-control-next' type='button' data-bs-target='#productSlide' data-bs-slide='next'>
                                            <span class='carousel-control-next-icon'></span>
                                        </button>

                                    </div>
                                </div>

                                <div class='col-lg-7 col-md-6 col-12 d-flex align-items-center'>

                                    <div class='pVariation'>

                                        <div class='colorSize'>

                                            <div class='text-start py-2' id='color'>
                                                <h2 class='m-0 px-5'>Color :</h2>
                                            </div>
                                            <div class='colorBTNS px-5'>
                                                <button class='mx-1'></button>
                                                <button class='mx-1'></button>
                                                <button class='mx-1'></button>
                                                <button class='mx-1'></button>
                                            </div>

                                            <div class='text-start py-2' id='size'>
                                                <h2 class='m-0 px-5'>Size :</h2>
                                            </div>
                                            <div class='sizeBTNS px-5 pb-3'>
                                                <button class='mx-1'>S</button>
                                                <button class='mx-1'>M</button>
                                                <button class='mx-1'>L</button>
                                                <button class='mx-1'>XL</button>
                                                <button class='mx-1'>2XL</button>
                                            </div>

                                        </div>

                                        <div class='container-fluid' id='QTYcolor'>
                                            <div class='row my-3'>
                                                <div class='col-md-6 col-6' id='qtyBuy'>
                                                    <div class='qBuy my-3'>
                                                        <h2 class='my-2'>Quantity</h2>
                                                        <input type='number' name='quantity' id='qty' value='1'>
                                                    </div>
                                                    <button id='buyNow' class='my-3'><a href='checkout.php?productimg=$r[pimage]&pname=$r[pname]&pprice=$r[pprice]'>Buy Now</a></button>
                                                    <button id='cart' pid=$r[pid]><i class='ri-shopping-cart-fill'></i></button>
                                                </div>

                                                <div class='col-md-6 col-6' id='sm'>
                                                    <div>
                                                        <i class='ri-facebook-circle-fill'></i>
                                                        <i class='ri-instagram-fill'></i>
                                                        <i class='ri-whatsapp-fill'></i>
                                                        <i class='ri-pinterest-fill'></i>
                                                        <div class='socialFrd'><h5 class='m-0'>Share With Friends</h5></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                            </div>

                        </div>
                            ";
                }
                else{
                    echo "Product Not Found!";
                }

            ?>


        </div>


        <div class="container mt-5" id="dr"> 
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Description - Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit ut cum quibusdam, in dolorem unde enim, nisi iusto iste qui hic numquam assumenda dolorum quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut modi culpa ratione corporis asperiores esse, expedita illum similique amet laborum consequuntur quos atque placeat, minus magnam? Provident ipsum nemo aliquam nesciunt inventore rerum, cupiditate, sapiente nulla dignissimos laudantium accusamus voluptatibus. Enim voluptates nemo sunt reiciendis cum nisi sequi officiis nulla.</div>
                <div class="tab-pane fade text-center" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Reviews - Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat cupiditate beatae quisquam aliquam dolorum obcaecati, fugiat quam numquam. Eum dolore rem, eligendi corporis praesentium nostrum. Nam saepe autem aspernatur corrupti.</div>
            </div>

        </div>

        <div class="relatedProducts">
            <div class="text-center mt-5 pt-4 pb-2" id="specialSlide">
                    <h2 class="m-0 px-5">Related Products</h2>
                </div>

                <div id="related1" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">

                                <div class="row">

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product">
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
                                            <img src="images/p2.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#related1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button id="navig" class="carousel-control-next" type="button" data-bs-target="#related1" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

                <div class="container gap">
                    <div class="text-center py-1">
                        <h5 class="m-0 px-5">companyName.com</h5>
                    </div>
                </div>

                <div id="related2" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">

                                <div class="row">

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product">
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
                                            <img src="images/p1.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p2.jpg" alt="Product">
                                        </div>
                                    </div>

                                    <div class="col-4 p-1">
                                        <div class="imgSlide">
                                            <img src="images/p1.jpg" alt="Product">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <button id="navig" class="carousel-control-prev" type="button" data-bs-target="#related2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button id="navig" class="carousel-control-next" type="button" data-bs-target="#related2" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

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
                <script>
                    const cart = document.getElementById('cart');
                    const addToCart = document.getElementById('addToCart');
                    const cartFlex = document.getElementById('cartFlex');

                    cart.addEventListener('click', ()=>{
                        
                        fetch('addtocart.php', {

                                method: 'POST',
                                body: JSON.stringify({
                                    id: cart.getAttribute('pid')
                                }),

                                headers:{
                                    "Content-Type": "application/json"
                                }

                                }).then(res => {
                                    return res.json();
                                }).then(res => {
                                    cartFlex.innerHTML += "ADDED! ";
                            })

                    })
                </script>
</body>
</html>