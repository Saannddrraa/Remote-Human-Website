<?php include 'sendemail.php';?>



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

    <link rel="stylesheet" type="text/css" href="dist/css/main.css">

    <title>Remote Human</title>

</head>



<body>

<?php include 'inc/header-second.php';?>

    <main>



    <section class="about-rh section-padding">

        <div class="container">

            <div class="row text-center">

                <div class="col-12">

                    <h2 class="heading-secondary text-center">Please enter your details in the form below to buy products</h2>

                    <!--alert messages start-->

                    <?php echo $alert; ?>

                    <!--alert messages end-->

                </div>

    </section>

    <section class="section-padding">

        <div class="container">

            <div class="row">

                    <div class="col-md-6 col-sm-12">

                    <form class="shop-form" action="" method="POST">

                          <div class="form-group">

                        <label for="name">Full name*:</label>

                        <input class="form-control" placeholder="" name="name" type="name" required>

                        </div>

                        <div class="form-group">

                            <label for="email">Email*:</label>

                            <input class="form-control" placeholder="" name="email" type="email" required>

                        </div>

                        <div class="form-group">

                            <label for="address">Address*:</label>

                            <input class="form-control" placeholder="" name="address" type="address" required>

                        </div>



                        <div class="form-group">

                            <label for="postcode">Post code*:</label>

                            <input class="form-control" placeholder="" name="postcode" type="postcode" >

                        </div>    

                        <div class="form-group">

                            <label for="phone">Phone number*:</label>

                            <input class="form-control" placeholder="" name="phone" type="tel" required>

                        </div>



                        <div class="form-group" hidden>

                            <label for="cart">Cart:</label>

                            <input class="form-control" name="cart" value="<?php echo (isset($result_html))?$result_html:'';?>" readonly>

                        </div>



                        <button class="btn btn-danger" name = "submit" type="submit">Buy</button>

                    </form> 

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <img class="img-fluid" src="src/img/shopping-cart-wish-list.jpg" alt="">

                    </div> 

                <div hidden><?php echo (isset($result_html))?$result_html:'';?></div>

                </div>

                </div>

            </div> 

        </div>

</section>



                </main>

</div>

</div>

<?php include 'inc/footer.php';?>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="src/js/script.js"></script>

</body>



</html>