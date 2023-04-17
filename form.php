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
    <!--//***** START HEADER SCRIPT ******** //--->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">

  var message_success = "Поръчката е приета успешно!";
  var message_error = "Възникна грешка. Моля опитайте по-късно.";
  var message_alert = "Проверете формата за греки и оптайте пак.";



//  $(function () {
//   var austDay = new Date();
//     var endDay = new Date();
//     endDay.setDate(endDay.getDate()+1);
//     //austDay = new Date(austDay.getFullYear(), austDay.getFullYear(), 26);    
//     austDay = new Date(endDay.getFullYear(), endDay.getMonth(), endDay.getDate() );
//     //document.write(("0" + now.getDate()).slice(-2)+"." +("0" + (now.getMonth() + 1)).slice(-2)+"."+now.getFullYear())
//     
//     //5 sec time
//     shortly = new Date(); 
//     shortly.setSeconds(shortly.getSeconds() + 5.5);
//     
//     
//   //$('#promo-countdown').countdown({until: austDay});
//   $('#promo-countdown').countdown({until: austDay, onExpiry: liftOff,});
//   $('#end_day').text(("0" + endDay.getDate()).slice(-2)+"." +("0" + (endDay.getMonth()+1) ).slice(-2)+"." + endDay.getFullYear());
//  });

  function liftOff() { 
     location.reload(); 
  } 

  function send_mobile_form(form){
     
     $.ajax({    
             url: '/shop/ajax.php',
             type: 'post',
         dataType: 'json',
             //data : $('#form-mobile-order input[type=\'text\'],input[type=\'phone\']'),
             data: $("#form-mobile-order").serialize(),            
             success : function(data) {              
                 //alert(data);
                 
                 if(data['error']){
                     alert(message_alert);
                     return;
                 }
                 
                 if(data['success']){
                     $('.modal-body').html('<div class="alert alert-success">' + message_success +'<\/div>');    
                 }else{
                     $('.modal-body').html('<div class="alert alert-danger">' + message_error +'<\/div>');
                 }
                 $("#button-modal-submit").hide();
                 $("#button-modal-close").show();
                 
                 
             },
             error : function(request,error)
             {
                 alert("Request: "+JSON.stringify(request));
             }
         });
  }


  </script>
  <script type="text/javascript">

  var numErrors = 0;
  var errMsg = [];
  var tmpRegexs = [];
  /*
  tmpRegexs['E'] = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  tmpRegexs['N'] = /\S/;
  tmpRegexs['D'] = /[0-9]+/;
  */
  $(document).on('keydown', function(){
  clear_errors();
  });
  $('input.html').on('click', function(){
     alert(5);
  clear_errors();
  });

  function alert_msg(F, msg){
     clear_errors();
     numErrors = Math.floor(numErrors + 1);
     //var acb = document.getElementsByName(F);
     $("body").append("<div class=\"tip\"><div class=\"toolTip\"><div class=\"toolTipArrow\"><\/div>"+msg+"<\/div><\/div>");
     $(".tip").css({
         top: $(F).offset().top + $(".tip").height() - 3,
         left: $(F).offset().left
     });
     alert(msg);
     $(F).focus();
  }

  function clear_errors(){
     $(".tip").remove();
     numErrors = 0;
  }

  function show_hidden(obj){
     $(obj).fadeIn(500);
  }

  var fool_secure_list = [
     "shipping_email", "billing_email"
  ];

  function template_validator(list){    
     clear_errors();
     for(x in list){
         
         var elem = document.getElementsByName(x);
         
         if(fool_secure_list.indexOf($(elem).attr("name")) > -1){
             $(elem).val($(elem).val().replace(" ", ""));
         }
         if(!$(elem).val().match(list[x].mask)){
             if($(elem).closest(".mainInfo").is(":hidden")){
                 $(elem).closest(".mainInfo").fadeIn(50);
             }
             alert_msg(elem, list[x].hint);            
             break;
         }
     }
     
     if(numErrors === 0){
         return true;
     }
     return false;
  }



//  $(document).ready(function(){
//      $(window).scroll(function () {
//             if ($(this).scrollTop() > 50) {
//                 $('#back-to-top').fadeIn();
//             } else {
//                 $('#back-to-top').fadeOut();
//             }
//         });
//         // scroll body to 0px on click
//         $('#back-to-top').click(function () {
//             $('#back-to-top').tooltip('hide');
//             $('body,html').animate({
//                 scrollTop: 0
//             }, 800);
//             return false;
//         });
//         
//         $('#back-to-top').tooltip('show');
//
//  });
</script>
<!--//***** END HEADER SCRIPT ******** //--->

</head>

<body>
    <header class="header-about sticky">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-color">
                <a class="navbar-brand" href="index.html"><img class="navbar__logo" src="src/img/logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutrh.html">About RH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="business.html">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="education.html">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gaming.html">Gaming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link contact-border" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>

<section class="section-padding">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informacije o vasoj narudzbini:
                </div>
                <div class="panel-body">
                   <div class="table-responsive">
                        <table class="table table-bordered ">
                        <thead> 
                            <tr>
                                <th><strong>Proizvod</strong></th>
                                <th>Set</th>
                                <th class="type-number"><strong>Cena</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Retro Konzola 1</td>
                                <td>1</td>
                                <td class="type-number">1,990 RSD</td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </div><!-- <div class="panel-footer">No title</div> -->

                <div class="panel-body">
                   <div class="table-responsive">
                        <table class="table table-bordered ">
                        <thead> 
                            <tr>
                                <th class="type-number"><strong>Dostava</strong></th> 
                                <th class="type-number"><strong>Ukupno</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="type-number" style="color: #ff5b2b"><b>270</b> RSD</td> 
                                <td class="type-number" style="color: #ff5b2b"><b>2,260</b> RSD</td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </div><!-- <div class="panel-footer">No title</div> -->
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Molimo vas unesite vase podatke u dole zadatoj formi. Kupi dok je akcija!!!</h2>
                </div>
                <div class="panel-body">
                    <h3>Unesite informacije:</h3>
                    <div class="message"></div>
                    <form action="../success/1/" id="orderform" method="post" name="orderform">
                         <input name="_subject" type="hidden" value="Kupac: Naruceno sa Retro Konzola Srbija"> 
                         <input name="_Price" type="hidden" value="2,260">
                         <input name="_Transport" type="hidden" value="240">
                         <input name="_Pieces" type="hidden" value="x1">
                         <input name="site_name" type="hidden" value="Retro Konzola X1">
                          <div class="form-group">
                        <label for="name">Ime*:</label>
                        <input class="form-control" id="name" placeholder="Ime" name="shipping_UserFirstName" type="firstname" required>
</div>
<div class="form-group">
    <label for="lastname">Prezime*:</label>
    <input class="form-control" id="lastname" placeholder="Prezime" name="shipping_UserLastName" type="lastname" required>
</div>
<div class="form-group">
    <label for="country">Drzava*:</label>                        
    <select class="form-control" id="country" name="shipping_UserCountry">
      <option value="Srbija" selected="selected">Srbija</option>
  </select>
</div>
<div class="form-group">
    <label for="city">Mesto*:</label>
    <input class="form-control" placeholder="Grad, Selo, Varos" id="city" name="shipping_UserCity" type="city" required>
</div>
<div class="form-group">
    <label for="address">Adresa*:</label>
    <input class="form-control" id="address" placeholder="Adresa, Zgrada, Kuca, Ulica, Firma" name="shipping_UserAddress" type="address" required>
</div>

<div class="form-group">
    <label for="postcode">Postanski broj:</label>
    <input class="form-control" id="postcode" placeholder="Postanski kod" name="shipping_UserZip" type="postcode" >
</div>    
<div class="form-group">
    <label for="phone">Telefon*:</label>
    <input class="form-control" id="phone" placeholder="Broj telefona" name="shipping_UserPhone" type="tel" required>
</div>


                        <button class="btn btn-danger" type="submit">Kupi</button>
                    </form> 
              
            
                </div>
            </div> 
        </div>
    </div>
</div><br>
</div>
</section>
<footer class="footer text-center" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.html"><img src="src/img/logo.png" class="footer__logo mr-bottom" alt="Logo" /></a>
            </div>
            <div class="col-md-4">
                <p>CONTACT US</p>
                <ul class="footer__contact-list">
                    <li class="footer__item">
                        <img class="footer__icon" src="src/img/call.svg" alt="Phone">
                        <a href="javascript:;" class="footer-link">+381638981735</a>
                    </li>
                    <li class="footer__item">
                        <img class="footer__icon" src="src/img/envelope.svg" alt="Email">
                        <a href="javascript:;" class="footer-link">contact@remote-human.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <p>FOLLOW US</p>
                <ul>
                    <li class="footer__item"><a href="https://github.com/remote-human" target="_blank"><i class="fab fa-github footer__icon"></i></a></li>
                    <li class="footer__item"><a href="https://www.facebook.com/remotehumanrobotics/" target="_blank"><i class="fab fa-facebook-f footer__icon"></i></a></li>
                    <li class="footer__item"><a href="https://twitter.com/HumanRemote?s=20" target="_blank"><i class="fab fa-twitter footer__icon"></i></a></li>
                    <li class="footer__item"><a href="https://instagram.com/remotehuman?igshid=zbf7nw52vv73" target="_blank"><i class="fab fa-instagram footer__icon"></i></a></li>
                    <li class="footer__item"><a href="https://www.linkedin.com/company/remote-human" target="_blank"><i class="fab fa-linkedin footer__icon"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <p>LINKS</p>
                <ul>
                    <li class="links-text"><a class="footer-contact" href="index.html">Home</a></li>
                    <li class="links-text"><a class="footer-contact" href="aboutrh.html">About RH</a></li>
                    <li class="links-text"><a class="footer-contact" href="business.html">Business</a></li>
                    <li class="links-text"><a class="footer-contact" href="products.html">Products</a></li>
                    <li class="links-text"><a class="footer-contact" href="education.html">Education</a></li>
                    <li class="links-text"><a class="footer-contact" href="gaming.html">Gaming</a></li>
                    <li class="links-text"><a class="footer-contact" href="news.html">News</a></li>
                    <li class="links-text"><a class="footer-contact" href="shop.html">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p>Copyright &copy; 2020 RH. All rights reserved.</p>
    </div>
</footer>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="src/js/script.js"></script>
</body>

</html>