
<?php

 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "v.suchismitha1994@gmail.com";
    $email_subject = "From Website";
 
 
 
     
 
    $name = $_POST['name']; // required// required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
 
    $email_body = "You have received a new message. "
                    " Here are the details:\n Name: $name \n ".
                    "Email: $email_from\n Subject: $subject \n Message \n $message";

    $headers = "From: $to\n";
    $headers .= "Reply-To: $email_from";
    mail($to,$email_subject,$email_body,$headers);

 
     

?>
 
<!-- include your own success html here -->


 
