<?php
   $name = $_GET['name'];
   $visitor_email = $_GET['email'];
   $visitor_mobile_no = $_GET['mobile_no'];
   $message = $_GET['message'];


   $email_from = 'onestepphysics@gmail.com';

   $email_subject = "New Form Submission";

   $email_body = "User Name: $name./n".
                "User Email: $visitor_email./n".
                "User Mobile No. $visitor_mobile_no./n".
                "User Message: $message./n";


  $to = "onestepphysics@gmail.com";
  $headers = "From: $email_from /r/n";
  $headers .= "Reply-to: $visitor_email /r/n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: contact_us.html")
















 ?>
