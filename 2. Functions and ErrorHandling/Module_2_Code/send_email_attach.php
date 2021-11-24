<?php
  $to = "receiver@somedomain.com";
  $subject = "This is subject";
  $message = "This is test message.";
  $file = fopen("./tmp/attachment_file.txt", "r");
  if( $file == false )
  {
     echo "Error in opening file";
     exit();
  }
 $size = filesize("./tmp/attachment_file.txt"); 
 $filecontent = fread($file, $size);
 $encoded_content = chunk_split(base64_encode($filecontent));
 
  $uniquenum = md5( time() );
  $header = "From:sender@somedomain.com\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-Type: multipart/mixed; ";
  $header .= "boundary=$uniquenum \r\n";
  $header .= "--$uniquenum \r\n";
  $header .= "Content-Type: text/plain\r\n";
  $header .= "Content-Transfer-Encoding:8bit\r\n\n";
  $header .= "$message\r\n";
  $header .= "--$uniquenum \r\n";
  $header .= "Content-Type:  multipart/mixed; ";
  $header .= "name=\"attachment_file.txt\"\r\n";
  $header .= "Content-Transfer-Encoding:base64\r\n";
$header .= "Content-Disposition:attachment; ";
  $header .= "filename=\"attachment_file.txt\"\r\n\n";
  $header .= "$encoded_content\r\n";
  $header .= "--$uniquenum --";
  $result = mail ($to, $subject, "", $header);
  if( $result == true )
  {
      echo "Mail sent successfully";
  }   else
  {
      echo "Mail could not be sent";
  }
  ?>