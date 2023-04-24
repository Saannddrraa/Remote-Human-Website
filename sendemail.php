<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address']; 
  $postcode = $_POST['postcode']; 
  $phone = $_POST['phone'];
  $cart = $_POST['cart'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'remotehuman19@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'remhumaca19'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('remotehuman19@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('remotehuman19@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = "Received mail from '$name'";
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Address : $address <br>Postcode : $postcode <br>Phone : $phone <br>Cart : $cart</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>"Thank you for purchase email! We \'ll be in touch."</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
// Get the results as JSON string
$product_list = filter_input(INPUT_POST, 'cart_list');
// Convert JSON to array
$product_list_array = json_decode($product_list);

$result_html = '';
if($product_list_array) {
    foreach($product_list_array as $p){
        foreach($p as $key=>$value) {
            //var_dump($key, $value);
            $result_html .= $key.": ".$value."<br />";
        }
        $result_html .= '------------------------------------------<br />';
    }
} else {	
	$result_html .= "<strong>Cart is Empty</strong>";
}
?>
