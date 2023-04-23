<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="VR robot avatar is a project which allow a user to experience the world from a remote robot's perspective using Virtual Reality HMD (Head-mounted display).">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/fontawesome-free-5.12.1-web/css/all.min.css">
    <link rel="stylesheet" href="dist/css/fontawesome-free-5.12.1-web/css/fontawesome.css">
    <link rel="stylesheet" href="dist/css/slick/slick.css">
    <link rel="stylesheet" href="dist/css/slick/slick-theme.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
    <title>Remote Human</title>
</head>

<body>
<?php include 'inc/header-second.php';?>
    <main>
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 shop-header d-flex justify-content-between align-items-center">
                        <div class="logo"><img class="navbar__logo" src="src/img/logo.png" alt="Logo"></div>
                        <div class="cart d-flex justify-content-between align-items-center">
                            <i class="fa fa-shopping-cart"></i><span id="count">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shop-sidebar section-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                <div id="root" class="col-md-8 col-sm-12"></div>
                    <div class="col-md-4 col-sm-12 sidebar-cart text-center">
                        <p class="sidebar-header d-flex align-items-center">My Cart</p>
                        <p id="cartItem">Your cart is empty</p>
                        <div class="sidebar-footer d-flex justify-content-between align-items-center">
                            <p><b>Total</b></p>
                            <p id="total">$ 0</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </main>
    <?php include 'inc/footer.php';?>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="src/js/shopping-cart.js"></script>
</body>

</html>