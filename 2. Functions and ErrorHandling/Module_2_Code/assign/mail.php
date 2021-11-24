<?php
$receiver_email ="umesh.kshirsagar@gmail.com";
$subject = "Enquiry about New Samsung mobile";
$message = "Kindly send me the details of the new model mobile available in
Samsung";
/* Email validation: */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $receiver_email)){
	echo "<h3>Invalid email address</h3>";
}
elseif (mail($receiver_email,$subject,$message)){
	echo "<h4>Thank you for sending email</h4>";
}
else{
	echo "<h4>Can't send email to $receiver_email</h4>";
}
?>
