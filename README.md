# Send-Email-Using-PHPMailer-with-HTML-templete
Send email in php with templete
1. Extract($_POST) – Extracting Post Variables From.

2. file_get_contents – Html design form to get the function.

Normally we use php mailer function for sending email with some text also.But here i have design one html template along to send with mail script.

    $to   = $post_email;
    $from = 'digitalreader@pixeldev.in';
    $name = 'Digital Reader';
    $subject = 'PHPMailer 5.2 testing from PixelDev';
    $msg = 'This is mail about testing mailing using PHP.';
    $body= file_get_contents('email_verifiy.php'); 
    $body = str_replace('[[firstname]]', $post_name, $body);
    $from_name="Digital Reader";
        
        
  
            
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.pixeldev.in';
        $mail->Port = '465';  
        $mail->Username = 'digitalreader@pixeldev.in';
        $mail->Password = 'Pixel@1234@';   
   
        //   $path = 'reseller.pdf';
        //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="digitalreader@pixeldev.in";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = "Digital Reader App confirmation ";
        $mail->Body = $body;
        $mail->AddAddress($post_email);
        
          if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";

      
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));

    
