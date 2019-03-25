<?php

  function send_email($name,$email,$reason,$text){

    //get mail variables ready
      $to = 'admin@thanks2you.com';
      $subject = $reason;
      $message = 'Email from: ' . $name ."! \r\n";
      $message .= $text." \r\n";
      $headers = "From: ".$email;

      
  
      
      // if(mail($to, $subject, $message, $headers)){
      if(fake_email($to, $subject, $message, $headers)){
          //returns true meaning email (this case fake_email) was sent successfully
          //was a success
          // fake mail
            $email_message = '==FAKE EMAIL=='. PHP_EOL;
            $email_message .= 'Subject: '. $subject.PHP_EOL;
            $email_message .= 'To: '. $to.PHP_EOL;
            $email_message .= $headers.PHP_EOL;
            $email_message .= 'message: '.$message.PHP_EOL;
            $email_message .= '==END OF EMAIL=='.PHP_EOL;
          return $email_message;
          // return array($to, $subject, $message, $headers);
      }else{
          //returned false- didnt send successfully
          $msg = 'failed';
          return $msg;
      }
  }

  //fake email to print email info for now (only because its not live)
  function fake_email($to, $subject, $message, $headers){
    //would actually send if this wasnt the fake email function and was php's "mail"
    return true;
  }

?>