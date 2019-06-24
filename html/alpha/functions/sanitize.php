<?php

function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}



function contact_email() {

$email = escape(Input::get('email'));




$to = $email;
$subject = "Thanks for contacting us!";
$txt = '<html><head>
<link href="src="http://atarizona.com/VRATE2015/VRATE/bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="src="http://atarizona.com/VRATE2015/VRATE/includes/css/styles.css">
</head><body>';
$txt .= '<div style = "padding-top:5%" class="row" id="bigCallout">
				<div class="col-12">

					
					<div class="well">

					<div align ="center" id ="content">
						<h1>Thanks!</h1>
						<p>We appreciate your feedback! We hope to see you at VRATE 2015!</p>
						<p>Save the date! December 11th, 2015</p>
						<a class ="btn btn-primary" href ="http://www.vrate.org">Back to Home Page</a>

					</div>
						<div align ="center"class="page-header">
							<h1 class ="title">
							VRATE 2015 <br>
							<img style ="border:solid #3366FF; border-radius:5px;"height="100%" width ="20%" src="http://atarizona.com/VRATE2015/VRATE/images/vrate_logo.jpg" alt="VRATE Logo" title ="VRATE Logo"> 
							<br>
							<small><b class ="bold">V</b>ision and <b class ="bold">R</b>ehabilitation <b class ="bold">A</b>ssistive <b class ="bold">T</b>echnology <b class ="bold">E</b>xpo</small>
							</h1>
						</div><!-- end page-header -->
						<div align ="center"><!-- BEGIN main image div-->

						

						<p class="lead">Save the Date! December 11th, 2015. Register now for a chance to win $100!</p>
						<div align ="center">
						<a href="http://www.vrate.org/register.php" class="btn btn btn-primary">Register Today!</a>
						<a href="https://www.facebook.com/pages/VRATE/356600052181" class="btn btn-large btn-link"><img  height ="70%" width ="100" src="http://atarizona.com/VRATE2015/VRATE/images/facebook.png" alt = "facebook logo" title ="Facebook Logo"></a>
						<a href="https://twitter.com/vrateAZ" class="btn btn-large btn-link"><img   height ="70%" width ="100" src="http://atarizona.com/VRATE2015/VRATE/images/twitter.png" alt = "Twitter logo" title ="Twitter Logo"></a>
						<a href="https://instagram.com/vrateaz/" class="btn btn-large btn-link"><img  height ="70%" width ="100" src="http://atarizona.com/VRATE2015/VRATE/images/Instagram.jpg" alt = "Instagram logo" title ="Instagram Logo"></a>
</div><!-- END of main image div-->
						</div><!-- end of center div-->
					</div><!-- end well -->
					
				</div><!-- end col-12 -->
			</div><!-- end bigCallout -->
';
$txt .= '</body></html>';
//$txt = "<html><div style = color:red; Hello<br> world!</html>";
$headers = "From: info@vrate.org\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to,$subject,$txt,$headers);

}