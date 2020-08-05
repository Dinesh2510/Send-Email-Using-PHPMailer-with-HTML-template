<?php
 header('Access-Control-Allow-Origin: http://localhost:3000');
  header('Access-Control-Allow-Headers: *');
  header('Access-Control-Allow-Methods: POST');

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';


$post_email=$_POST['post_email'];
$post_name=$_POST['post_name'];
$post_content=$_POST['post_description'];
$post_link=$_POST['post_link'];
$post_sub=$_POST['post_sub'];



if (!isset($post_email) && !isset($post_email)&& empty($post_email) && empty($post_email)) {
  $status = "failed";
  $response = "Something wents Wrong!";
  exit(json_encode(array("status" => $status, "response" => $response)));
}
// $activation = mt_rand(100000, 999999);
 
    $to   = $post_email;
    $from = 'your email';
    $name = 'your  title';
    $subject = 'PHPMailer 5.2 testing from PixelDev';
    $msg = 'This is mail about testing mailing using PHP.';
    $body= file_get_contents('email_verifiy.php'); 
    $body = str_replace('[[firstname]]', $post_name, $body);
    $body = str_replace('[[personemail]]', $post_email, $body);
    $body = str_replace('[[persondetail]]', $post_content, $body);
    $from_name="your sender title";
        
        
    //  "SELECT count(*),created_on FROM useres_table group by DATE_FORMAT(created_on, "%m-%d-%Y")";
        
     //   https://www.w3schools.com/sql/trymysql.asp?filename=trysql_func_mysql_date_format2
            
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.smtp.com';
        $mail->Port = '465';  
        $mail->Username = 'your email';
        $mail->Password = 'your password';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="your email";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = "your subject ";
        $mail->Body = $body;
        $mail->AddAddress($post_email);
        
          if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";

        /*    $sql = "INSERT INTO `user_verification`( `email`, `name`, `activation_code`, `is_active`) VALUES ( '$email', 
          '$name', '$activation','0' )";
          $result=mysqli_query($conn,$sql);
*/
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));

    
    

    
?>
