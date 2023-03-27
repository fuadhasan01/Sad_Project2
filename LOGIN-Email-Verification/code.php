<?php
session_start(); 
include('dbcon.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendemail_verify($name,$email,$verify_token){
    try{
    $mail = new PHPMailer(true);
     
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   
      $mail->Username   = 'muntasirayan125@gmail.com';                     
      $mail->Password   = 'chnqvbfkzyfhqyee';                             
      $mail->SMTPSecure ='tls';
      $mail->Port       = 587;
  
      //Recipients
      $mail->setFrom('muntasirayan125@gmail.com');
      $mail->addAddress($email); 
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Email Verification from form';

      $email_template="
      <h2> You have registered </h2>
      <a href= 'http://localhost/LOGIN-Email-Verification/verify-email.php?token=$verify_token' > cllik me</a>
      ";

      $mail->Body = $email_template;
    
      $mail->send();
      echo 'Message has been sent';
    }
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}




if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

    // sendemail_verify("$name","$email","$verify_token");
    // echo "sent or not";

    // Email exist or not
    $check_email_query = "SELECT email FROM users WHERE email ='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con,$check_email_query);
    if(mysqli_num_rows( $check_email_query_run)>0)
    {

        $_SESSION['status'] = "Email id already exists";
        header("Location: index.php");
    }
    else
    {

        // Insert user 
        $query = "INSERT INTO users (name,phone,email,password,verify_token) VALUES ('$name', '$phone', '$email','$password','$verify_token' )";
        $query_run = mysqli_query($con,$query);
        if($query_run){
            sendemail_verify("$name","$email","$verify_token");
            $_SESSION['status'] = "Resistration successful!!! Please verify your email";
            header("Location: index.php");  

        }
        else{
            $_SESSION['status'] = "Resistration failed";
            header("Location: index.php");  
        }
    }
}
?>
