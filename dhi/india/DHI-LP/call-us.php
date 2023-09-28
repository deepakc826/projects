<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = strtoupper($_POST['name']);
$phone = trim($_POST['phone']);
$location = strtoupper($_POST['location']);
$email = $_POST['email'];

//echo $name.$phone.$location.$message;exit;
$data = [];

if (empty($name)) {
    $data['status'] = 0;
    $data['key'] = "name";
    $data['val'] = "Name Field is Required!";
    echo json_encode($data);
} else if (empty($email)){
    $data['status'] = 0;
    $data['key'] = "email";
    $data['val'] = "Email Field is Required!";
    echo json_encode($data);
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $data['status'] = 0;
    $data['key'] = "email";
    $data['val'] = "Please enter a valid email!";
    echo json_encode($data);
}  else if(empty($location)) {
    $data['status'] = 0;
    $data['key'] = "location";
    $data['val'] = "Location Field is Required!";
    echo json_encode($data);
} else if(empty($phone)) {
    $data['status'] = 0;
    $data['key'] = "phone";
    $data['val'] = "Phone Field is Required!";
    echo json_encode($data);
} else if($phone < 1000000000 || $phone > 9999999999) {
    $data['status'] = 0;
    $data['key'] = "phone";
    $data['val'] = "Phone Number should be 10 digit !";
    echo json_encode($data);
} else{

   $html = '<html xmlns="http://www.w3.org/1999/xhtml">'
        . '<head>'
        . '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'
        . '<title></title>'
        . '<style>
						body {
								margin: 0px;
								padding: 0px;
						}
						a {
							text-decoration: none;
							color: #e31c0f;
						}
				</style>'
        . '</head>'
        . '<body>'
        . '<table bgcolor="#f1f1f1" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">'
        . '<tr>'
        . '<td align="center" valign="top">'
        . '<table bgcolor="#ffffff" border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer" style="margin-top: 30px;line-height: 1.5; font-family: Verdana, Geneva, sans-serif; border-radius: 5px; border: 1px solid #ebebeb;">'
        . '<tr>'
        . '<td style="border-bottom: 1px solid #ededed;">'
        . '<h2 style="font-weight:700;color:#3A8291;">DHL</h2>'
        . '</td>'
        . '</tr>'
        . '<tr>'
        . '<td valign="top">'
        . '<p><strong><span style="color:rgb(178, 34, 34)">'
        . '<span style="font-size:18px">'
        . '<span style="font-family:arial,helvetica,sans-serif">Hello</span> ADMIN,</span></span></strong></p>'
        . '<p>Someone has contacted you. Please see the below details&nbsp;and reply on it.</p>'
        . '<p>Name: ' . $name . '</p><br/>'
        . '<p>Phone : ' . $phone . '</p><br/>'
    	. '<p>Email : ' . $email . '</p><br/>'
    	. '<p>Location : ' . $location . '</p><br/>'
        . '</tr>'
        . '<tr>'
        . '<td style="border-top: 1px solid #ededed; margin-top: 30px;">'
        . '<p style="text-align: center; font-size: 13px; font-weight:700;color:#3A8291;">DHL</p>'
        . '</td>'
        . '</tr>'
        . '</table>'
        . '</td>'
        . '</tr>'
        . '</table>'
        . '</body>'
        . '</html>';

    $mail = new PHPMailer(true); 

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.jwsoft.in';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@jwsoft.in';                     //SMTP username
        $mail->Password   = 'IamanIndian@1';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@jwsoft.in', 'Admin');
        $mail->addAddress('albert@yopmail.com', 'Recepient');     //Add a recipient
        

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Enquiry';
        $mail->Body    = $html;
        //$mail->AltBody = $name;

        $mail->send();
        
        $data['status'] = 1;
        $data['key'] = "message";
        $data['val'] = "Thank You to contact with Us.";
        echo json_encode($data);
    } catch (Exception $e) {
        $data['status'] = 0;
        $data['key'] = "message";
        $data['val'] = "Message could not be sent.";
        echo json_encode($data);
    }

}

?>