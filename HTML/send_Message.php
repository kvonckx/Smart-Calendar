<html>
<head>
    <title>Mali Messenger</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <!--tabs at the top-->

    <ul class="toptabs">
        <li><a href="index.html">Calendar</a></li>
        <li><a href="Ads.html">Advertisements</a></li>
        <li id="active"><a>Mali Messenger</a></li>
        <li><a href="Announcements.html">Announcements</a></li>
    </ul>

    <!--all page content. has left margins for the side tabs-->
    <div class="content">

<?PHP

require "/var/www/Smart-Calendar/PHPMailerAutoload.php";

$email="olekmali@fsmail.bradley.edu";
$phone="3093061131@@msg.fi.google.com";


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $_POST['guser'];
$mail->Password = $_POST['gaslo'];
$mail->SetFrom($_POST['guser']);
$mail->Body = $_POST['message'];

$messageType=$_POST['messageType'];

if ($messageType == "Urgent"){
$mail->AddAddress($phone);
}

else

{
$mail->AddAddress($email);
$mail->Subject = "Calendar Message";
}

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

?>

</div>

    <script src="idleDirect.js"></script>

</body>
</html>
