<!-- <?php
$to = "receipient@domainname.com";
$subject = "This is subject";
$message = "This is simple text message.";
$header = "From:sender@somedomain.com \r\n";
$result = mail ($to,$subject,$message,$header);
if( $result == true )  
{
	echo "Mail sent successfully";
}
else
{
      echo "Mail could not be sent";
}
?> -->

<?php
$to = "joedcunha12@gmail.com";
$subject = "This is subject";
$message = "This is simple text message.";
$header = "From:josephdcunha.02@gmail.com \r\n";
$result = mail ($to,$subject,$message,$header);
if($result == true){
      echo "mail sent successfully";
}
else {
      echo "mail could not be sent";
}
?>
