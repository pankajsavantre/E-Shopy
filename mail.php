
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
if (isset($_POST['submit'])) {

  $email=$_POST['email'];
  $msg=$_POST['msg'];

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "psavantre07@gmail.com";
$mail->Password = "omgodganesha";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "";
$mail->FromName = "TechPs";

$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject = "Techps";
$mail->Body = '
<div class="main">
        <h2 style="color:red;display:flex;place-content:center;font-size:1rem;"><p>Welcome To Tech Ps</p></h2>
        <div>
            <img src="https://bootstrapmade.com/content/templatefiles/Moderna/Moderna-bootstrap-website-template-md.png" alt="">
            <a href="http://google.com"><button class="btn btn-primary">Click Here</button></a>
        </div>
        <div class="footer text-center">
            <h2 class="copy"><p>@Copyrights 2021 Tech-Ps</p></h2>
        </div>
    </div>

    ';

$mail->AltBody = "Your order Detail is-Mobile 6.5inch";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
// -----------------------------------------------------other-----------------------------------

}
 ?>