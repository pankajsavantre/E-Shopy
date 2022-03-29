<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";



include "config.php";
$p_name=$_POST['p_name'];
$p_price=$_POST['p_price'];
$p_total=$_POST['p_total'];
$p_img=$_POST['p_img'];
$cust_name=$_POST['cust_name'];
$cust_phone=$_POST['cust_phone'];
$cust_deladdress=$_POST['cust_deladdress'];
$cust_zipcode=$_POST['cust_zipcode'];

$username=$_POST['username'];
$p_mode=$_POST['p_mode'];

$status="Pending";
$sql="INSERT INTO e_order(p_name,p_price,p_total,cust_name,cust_phone,cust_deladdress,cust_zipcode,p_mode,username,status) VALUES('$p_name','$p_price','$p_total','$cust_name','$cust_phone','$cust_deladdress','$cust_zipcode','$p_mode','$username','$status')";
$res=mysqli_query($con,$sql);

// ==============================email==========================================

$html='
    
    <center>
<div style="width:350px;background:#ffdfdf;">
    
    <table style="width:100%;background:#a2dbfc">
        <tr>
            <th style="float:left;margin-left:10px;font-size:1.2rem;">E-Shopy</th>
        </tr>
        
    </table>
    <table>
  <center>   <strong>Your Order Details</strong> </center>
        <tr>
        <td>
        	<img src="cid:postimg" alt="Product Image" width="250px" height="200px">
            
        </td>

    </tr>
    <tr>
        <td><strong>Products:</strong>' .$p_name. '</td>
    </tr>
     <tr>
        <td><strong>Product Price:</strong>'.number_format($p_total,2,'.',',').' Rs'.'</td>
    </tr>
     <tr>
        <td><strong>Email :</strong>'.$username.'</td>
    </tr>
     <tr>
        <td><strong>Mobile:</strong>'.$cust_phone.'</td>
    </tr>
    <tr>
        <td style="color:blue;">Visit Again :)</td>
    </tr>
    </table>
    <footer style="width:100%;background:#a2dbfc">
            <span>Copyright © E-Shop 2022</span>
    </footer>
</div>
</center>
    
    '
;

$mail = new PHPMailer(true);

//Enable SMTP debugging.
// $mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "eshopy.online@gmail.com";
$mail->Password = "eshop123";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "E-shopy@online.com";
$mail->FromName = "E-Shopy";

$mail->addAddress($username);

$mail->isHTML(true);

$mail->Subject = "ORDER DETAILS";
$mail->Body =$html;
$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
));
$mail->AddEmbeddedImage(dirname(__FILE__) . '/Admin/'.$p_img.'','postimg');
// $mail->AltBody = "Your order Detail";

 if($mail->send()){
      echo 1;
}else{
    echo "Mailer Error: " ;
}



// =======================================end=======================================

 ?>