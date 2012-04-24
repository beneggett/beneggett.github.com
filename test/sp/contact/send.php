<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Solar Precision | Appointment Confirmation</title>
</head>

<body>
<?php
$to = "davideggett@gmail.com";
$subject = "Appointment Scheduled | Confirmation Needed";
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['telephone'] ;
$date = $_REQUEST['date'] ;
$time = $_REQUEST['time'] ;
$message = $_REQUEST['message'] ;
$headers = "From: $email";
$embody = "Patient Name: $name | Telephone Number: $phone |Date: $date | Time: $time | Nature of Visit: $message | Email Address: $email" ;
$sent = mail($to, $subject, $embody, $headers) ;
if($sent)
{print "Your mail was sent successfully, Solar Precision will contact you within the next 24 hours to confirm your appointment. Thank You!"; }
else
{print "We encountered an error sending your mail, please try again or call Solar Precision at 801.609.8468"; }
?>

</body>
</html>
<script type="text/javascript"> 
   var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19429436-1']);
  _gaq.push(['_trackPageview']);
   (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script> 