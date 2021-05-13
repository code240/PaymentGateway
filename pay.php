<?php
$apikey = "rzp_test_671WjZWZAOYs97";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Securely</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/razorpay.png" type="image/x-icon">
    <link rel="stylesheet" href="css/pay.css">
</head>
<body>

<h1>if you are not automatically redirect then please click the below button.</h1>
<script>
    $(window).on('load', function() {
     jQuery('.razorpay-payment-button').click();
    });
  </script>
<form action="success.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>"  
    data-amount="<?php echo (int)$_POST['amount']*100; ?>"  
    data-currency="INR" 
    data-order_id="<?php echo 'OID'.rand(10,99).'END'; ?>" 
    data-buttontext="Redirect"
    data-name="VipinCreation"
    data-description="Its a test project and the money would not be debitted from your account."
    data-image="https://shadiviah.in/cdn/logo/vipin-logo.png"
    data-prefill.name="<?php echo $_POST['name'] ?>"
    data-prefill.email="<?php echo $_POST['email'] ?>"
    data-prefill.contact="<?php echo $_POST['mobile'] ?>"
    data-theme.color="#F59E0B"
></script>
<input type="hidden" custom="Hidden Element" value="done" name="hidden">
</form> 
<br><br>
<h1>In case fail again and again then press back button.</h1>

<button onclick="window.location.assign('index.html');">back</button>
</body>
</html>