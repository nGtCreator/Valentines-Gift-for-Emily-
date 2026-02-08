<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0; // Set to 0 for production, SMTP::DEBUG_SERVER for testing
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       
    $mail->SMTPAuth   = true;
    $mail->Username   = 'ngt23345@gmail.com';
    $mail->Password   = 'expbjlmfyhocidtt';                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('ngt23345@gmail.com', 'Your Valentine <3');         
    $mail->addAddress('ngt23345@gmail.com', 'Emily <3');     

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'A special message for you...';
    
    // This is the "Pretty" HTML Body
    $mail->Body    = '
    <div style="background-color: #111; padding: 40px; font-family: \'Comic Sans MS\', cursive, sans-serif; text-align: center;">
        <div style="background-color: #fff; border: 4px solid rgb(139, 0, 204); border-radius: 20px; padding: 30px; max-width: 500px; margin: 0 auto; box-shadow: 0px 0px 20px rgba(139, 0, 204, 0.5);">
            
            <h1 style="color: rgb(139, 0, 204); font-size: 28px; margin-bottom: 20px;">To My Beautiful Emily ❤️</h1>
            
            <div style="font-size: 18px; line-height: 1.6; color: #333; margin-bottom: 25px;">
                Happy Valentine\'s Day My Love. <br><br>
                I love you so much. You are truly the best thing that has ever happened to me. 
            </div>

            <div style="font-size: 40px; margin-bottom: 10px;">💜</div>
            
            <p style="color: #888; font-size: 12px;">
                (sent with love from your man, Efecan...<3)
            </p>
        </div>
    </div>
    ';

    // This is a plain text version for older email apps
    $mail->AltBody = 'Happy Valentines Day My Love. I love you so much. You are the best thing that has ever happened to me ❤️';


    $mail->send();
    echo 'success'; 

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>