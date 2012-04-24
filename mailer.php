<?php
    $to = "ben@beneggett.com";
    $subject = $_REQUEST['contact_reason'];
	
	$message = '<div style="margin 0px auto;padding:0px;position:relative;display:block;"><div style="color:#1B62AE;"><h1> I\'m contacting you about ' . nl2br($subject) .' </h1></div><div style="font-size:14px; text-align:left;color:#00A4d9;"><h3>' .nl2br($_REQUEST['message']). '</h3></div>
<br><div style="font-size:12px; color:#1B62AE"> <h4>Message sent from: </h4><h3>'.nl2br($_REQUEST['name']).'<br>'.nl2br($_REQUEST['email']).'<br>'.nl2br($_REQUEST['phone']).'<br><br><strong>Please contact within the next 24 hours if possible. </strong></h3> </div></div>';
    $from_name = $_REQUEST['name'];
    $from_email = $_REQUEST['email'];
 	$headers .= "From: $from_name <$from_email>\n"; 
    $headers .= "Reply-To: $from_name <$from_email>\n";    $headers .= "MIME-Version: 1.0\n";  
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "Content-Transfer-Encoding: 8bit\n";

    if(mail( $to, $subject, $message, $headers ))
    {
   echo("<body style='background:transparent;'><p style='color:#f64d52;background: transparent;font-size:20px;width:415px;overflow:hidden;text-align:right;position:relative;display:block;margin-top:0px;'>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
?>

