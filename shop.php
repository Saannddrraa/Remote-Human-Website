<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="VR robot avatar is a project which allow a user to experience the world from a remote robot's perspective using Virtual Reality HMD (Head-mounted display).">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Include SmartCart CSS -->
    <link href="dist/css/smart_cart.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="dist/css/fontawesome-free-5.12.1-web/css/all.min.css">
    <link rel="stylesheet" href="dist/css/fontawesome-free-5.12.1-web/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
    <title>RH Shop</title>
</head>
<body>
    <?php include 'inc/header-second.php'; ?>
    <main>
    <section class="about-rh section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="heading-secondary horizontal-line text-center">Remote Human Shop</h2>
                </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Products
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <!-- BEGIN PRODUCTS -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/rh-t-shirt.jpeg" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH T-shirt</h4>
                                        <p data-name="product_desc">cotton, soft T-shirt</p>
                                        <hr class="line">
                                        
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                            <!--<div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="white"> white
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="black"> black
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€21.99</strong>
                                            
                                            <input name="product_price" value="21.99" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/rh-hoody.jpeg" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH Hoody</h4>
                                        <p data-name="product_desc">cozy, cotton hoody</p>
                                    
                                        <hr class="line">
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                            <!--<div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="white"> white
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="black"> black
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€33.99</strong>
                                            
                                            <input name="product_price" value="33.99" type="hidden" />
                                            <input name="product_id" value="145" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/rh-polo.jpeg" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH polo T-shirt</h4>
                                        <p data-name="product_desc">cotton, cozy polo T-shirt</p>
                                    
                                        <hr class="line">
                                        
                                        <div>
                                            <div class="form-group">
                                                <label>Size: </label>
                                                <select name="product_size" class="form-control input-sm">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                            <!--<div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="white"> white
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="black"> black
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€24.99</strong>
                                            
                                            <input name="product_price" value="24.99" type="hidden" />
                                            <input name="product_id" value="145" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/rh-cup.png" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH cup</h4>
                                        <p data-name="product_desc">ceramic, strong cup</p>
                                    
                                        <hr class="line">
                                        <div>
                                            <!--<div class="form-group">
                                                <label>Color: </label><br />
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="white"> white
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="product_color" value="black"> black
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€15.50</strong>
                                            
                                            <input name="product_price" value="15.50" type="hidden" />
                                            <input name="product_id" value="154" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/hat-beanie.png" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH Beanie </h4>
                                        <p data-name="product_desc">cozy, cool beanie </p>
                                    
                                        <hr class="line">
                                            <!--<div class="form-group">
                                                <div class="form-group">
                                                    <label>Color: </label><br />
                                                    <label class="radio-inline">
                                                        <input type="radio" name="product_color" value="white"> white
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="product_color" value="black"> black
                                                    </label>
                                                </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€15.50</strong>
                                            
                                            <input name="product_price" value="15.50" type="hidden" />
                                            <input name="product_id" value="155" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                            </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            <div class="col-md-4 col-sm-6">
                                <span class="sc-product-item thumbnail">
                                    <img data-name="product_image" class="product_img" src="src/img/rh-hat.png" alt="...">
                                    <div class="caption">
                                        <h4 data-name="product_name" class="heading-4">RH hat </h4>
                                        <p data-name="product_desc">sport hat </p>
                                    
                                        <hr class="line">
                                            <!--<div class="form-group">
                                                <div class="form-group">
                                                    <label>Color: </label><br />
                                                    <label class="radio-inline">
                                                        <input type="radio" name="product_color" value="white"> white
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="product_color" value="black"> black
                                                    </label>
                                                </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="gift_wrap" value="1"> Gift wrap
                                                </label>
                                            </div>-->
                                            <div class="form-group2">
                                                <input class="sc-cart-item-qty" name="product_quantity" min="1" value="1" type="number">
                                            </div>
                                            <strong class="price pull-left">€17.50</strong>
                                            
                                            <input name="product_price" value="17.50" type="hidden" />
                                            <input name="product_id" value="155" type="hidden" />
                                            <button class="sc-add-to-cart btn btn-success btn-sm pull-right section-news__btn">Add to cart</button>
                                            </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </span>
                            </div>
                            </div>
                            </div>
                            </div>
            <aside class="col-md-4">
                
                <!-- Cart submit form -->
                <form action="form.php" method="POST"> 
                    <!-- SmartCart element -->
                    <div id="smartcart"></div>
                </form>
                
            </aside>
    </section>
</main>
<?php include 'inc/footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript" ></script>
    <!-- Include SmartCart -->
    <script src="dist/js/jquery.smartCart.min.js" type="text/javascript"></script>
    <!-- Initialize -->
    <script type="text/javascript">
        $(document).ready(function(){
            // Initialize Smart Cart    	
            $('#smartcart').smartCart();
		});
    </script>
</body>
</html>