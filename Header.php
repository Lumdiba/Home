
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
    <link rel="stylesheet" href="style.css">

    <title>Header</title>
</head>
<body>

    <div class="navbarContainer">

        <nav class="navbar fixed-top py-2 px-4" id="navBar">

                    <div class="container p-0">

                        <a href="Home.php" class="navbar-brand" id="logoRound"><img src="images/logon.png" width="45px" alt="Brand_Logo"></a>
                            
                        <button id="cartBTN"><h5 class="text-light" id="name">
                                    <?php
                                        if(empty($_SESSION['uName'])){
                                            echo "<i class='ri-question-fill'></i><a href='login-logout.php' class='text-decoration-none text-light border-bottom'>Login</a>";
                                        }else{
                                            echo "<i class='ri-arrow-right-s-fill'></i>".$_SESSION['uName'];
                                        } 
                                    ?></h5>
                        <span class="navbar-toggler" id="newIconCart" data-bs-toggle="offcanvas" data-bs-target="#cartLinks">
                            <i class="ri-shopping-cart-fill"></i>
                        </span>
                        </button>                

                        <button class="navbar-toggler" id="navBTN" data-bs-toggle="offcanvas" data-bs-target="#menuLinks">
                        <i class="ri-menu-fold-line"></i>
                        </button>

                        <div class="offcanvas  offcanvas-bottom" id="cartLinks">

                            <div class="offcanvas-header">

                                <h5 class="offcanvas-title">Items in Cart:</h5>

                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>

                            </div>

                            <div class="offcanvas-body" id="cartFlex">

                            <?php
    
                                // if(isset($_SESSION['pCart'])){

                                //     foreach($_SESSION['pCart'] as $data){
                                    
                                //     echo "<div id='itemCart'>
                                //     <img src='images/$data[pimage]' width='100px' alt='cartItems'>
                                //     <span>$data[pname]</span>
                                //     <span>Color</span>
                                //     <span>Size</span>
                                //     <span>$data[pprice]</span>
                                //     <span>Qty</span>
                                // </div>";
                                //     }
                                // }
                                // else{
                                //     echo "<div class='text-center text-light'>Empty Cart</div>";
                                // }

                            ?>

                            </div>
                        </div>
                        
                        <div class="offcanvas  offcanvas-end" id="menuLinks">

                            <div class="offcanvas-header">

                                <div class="offcanvas-title" id="insideLogo">
                                    <img src="images/logon.png" width="45px" alt="Brand_Logo">
                                </div>

                                <button type="button" class="btn-close text-reset text-light" data-bs-dismiss="offcanvas"></button>

                            </div>

                            <ul class="navbar-nav text-center my-5" id="links">

                                <li class="nav-item">
                                    <a href="Home.php" class="nav-link">Home</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>

                                    <ul class="dropdown-menu text-center" id="subLinks">

                                        <li><a href="#" class="dropdown-item">T-Shirts</a></li>

                                        <li><a href="#" class="dropdown-item">Shoes</a></li>

                                        <li><a href="#" class="dropdown-item">Hoodies</a></li>

                                        <li><a href="#" class="dropdown-item">OverSize</a></li>

                                        <li><a href="#" class="dropdown-item">Custom</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="shopage.php" class="nav-link">Shop-Page</a>
                                </li>

                                <li class="nav-item">
                                    <a href="cart.php" class="nav-link">Cart</a>
                                </li>

                                <li class="nav-item">
                                    <a href="account.php" class="nav-link">My-Account</a>
                                </li>

                                <li class="nav-item">
                                    <?php 
                                    
                                        if(empty($_SESSION['uName'])){
                                            echo "<a href='login-logout.php' class='nav-link'>Login/Register</a>";
                                        }
                                        else{
                                            echo "<a href='login/logout.php' class='nav-link'>LogOut</a>";
                                        }
                                    
                                    ?>
                                </li>

                            </ul>

                        </div>

                    </div>

        </nav>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>