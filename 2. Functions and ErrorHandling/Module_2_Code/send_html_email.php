 <!-- <?php
	 $to = "receipient@domainname.com";
	 $subject = "This is subject";
	 $message = "<b>This is HTML message.</b>";
	 $message .= "<h1>This is headline.</h1>";
	 $header = "From:sender@somedomain.com \r\n";
	 $header .= "MIME-Version: 1.0\r\n";
	 $header .= "Content-type: text/html\r\n";
	 $result = mail ($to,$subject,$message,$header);
	 if( $result == true )
	 {
		echo "Mail sent successfully";
	 }   else   {
		echo "Mail could not be sent";
	 } 
 ?> -->

<?php
$to = "joedcunha12@gmail.com";
$subject = "This is subject";
$message = "<b>This is simple text message.</b>";
$message = "<h1>This is simple text message.</h1>";
$header = "From:josephdcunha.02@gmail.com \r\n";
$result = mail ($to,$subject,$message,$header);
if($result == true){
      echo "mail sent successfully";
}
else {
      echo "mail could not be sent";
}
?>