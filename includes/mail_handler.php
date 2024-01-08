<?php 
	if(isset($_POST['submit'])){
    $to = "info@footballadvice.ch"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $subject = "FootbalAdvice Form submission";
    $subject2 = "Copy of your FootbalAdvice form submission";
    $message = $full_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,utf8_decode($subject),utf8_decode($message),$headers);
    mail($from,utf8_decode($subject2),utf8_decode($message2),$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";

  	//header( 'Location: /includes/thank_you.php' ) ; 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
		<style>
			@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
			@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
		</style>
		<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
		<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
		<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	</head>
	<body>
		<header class="site-header" id="header">
			<h3 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h3>
			<h1><?php echo $full_name; ?>!</h1>
		</header>

		<div class="main-content">
			<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
			<p class="main-content__body" data-lead-id="main-content-body">Mail Sent... , we will contact you shortly.</p>
		</div>

		<footer class="site-footer" id="footer">
			<p class="site-footer__fineprint" id="fineprint">Go Back to | <a href="/index.php">Footballadvice.ch</a></p>
		</footer>
	</body>
</html>