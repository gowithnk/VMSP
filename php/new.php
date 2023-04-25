
<?php
session_start();
$e=$_SESSION['qr'];
// Email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include('dbconn.php');
if(isset($_POST['submit']))
{

$name=$_POST['name1'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$department=$_POST['department'];
date_default_timezone_set('Asia/Kolkata');
$in_time=date("h:i A");
$date=date("d-m-Y");
$person_meet_id=$_POST['person_meet_id'];
$v_email=$_POST['v_email'];
$purpose=$_POST['purpose'];
$company=$_POST['company'];
$city=$_POST['city'];
$address=$_POST['address'];

$sql="Select * from emp_table where id=$person_meet_id";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);

$empEmail = $fetch['email_id'];
$person_meet=$fetch['name'];
if($fetch['phone']==''){$empPhone=$fetch['office_phone'];}else{$empPhone=$fetch['phone'];};

$img = $_POST['image'];
$folderPath = "upload/";
$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid() . '.jpeg';
$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);	

//SMS
$smsMsg = 'New Visitor :  Name - ' .$name .', Phone Number - ' .$phone .', Entry Time - ' .$in_time; 
$fields = array(
    "sender_id" => "TXTIND",
    "message" => "$smsMsg",
    "route" => "v3",
    "numbers" => "$empPhone",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: 0wBVRXoR6NTEquV0UIorparuKU7KXKT2O1Xj0Ax6AyRAFc82qq9dNXYxdy8z",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
// SMS End here ----------

// mail
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sh005.bigrock.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gpms@synokem.com';                     //SMTP username
    $mail->Password   = 'Syn@12345^^';                          //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    $mail->setFrom('gpms@synokem.com', 'Synokem VMS');
    $mail->addAddress($empEmail, $person_meet);     //Add a recipient
    $mail->addAttachment($file);         //Add attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Visitor';
    // $mail->Body    = '<b>Name: </b>'. $name . '<br>' . '<b>Gender: </b>' . $gender . '<br>' . '<b>Phone: </b>' . $phone . '<br>' . '<b>Company: </b>' . $company . '<br>' . '<b>Purpose: </b>' . $purpose . '<br>' . '<b>Person to Meet: </b>' . $person_meet . '<br>' . '<b>Date: </b>' . $date . '<br>' . '<b>Time: </b>' . $in_time . '<br>';
    $mail->Body    = '<table bgcolor="#e4f3ff" cellpadding="5" cellspacing="5" style="width="100%;padding:30px;">
      <tr><td><b>Name : </b></td><td>'. $name . '</td></tr>
      <tr><td><b>Gender : </b></td><td>'. $gender . '</td></tr>
      <tr><td><b>Phone : </b></td><td>'. $phone . '</td></tr>
      <tr><td><b>Company : </b></td><td>'. $company . '</td></tr>
      <tr><td><b>Purpose : </b></td><td>'. $purpose . '</td></tr>
      <tr><td><b>Person to Meet : </b></td><td>'. $person_meet . '</td></tr>
      <tr><td><b>Date : </b></td><td>'. $date . '</td></tr>
      <tr><td><b>Time : </b></td><td>'. $in_time . '</td></tr>
    </table>';

    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$sql="insert into inquery(Name,Gender,Phone,Department,Person_Meet,In_Time,Date,qr_code,Image,Vemail,Company,Purpose,City,Address) values(
'$name','$gender','$phone','$department','$person_meet','$in_time','$date','$e','$file','$v_email','$company','$purpose','$city','$address')"; 
$query=mysqli_query($db,$sql); 
if($query) 
		{     
			echo"<script>alert('Data Inserted');</script>";
      die();	
      echo"<script>location.href='slip.php';</script>";
		}
		else
		{
			echo "<br>";
			echo"<script>alert ('error');</script>";
      die();
		}
		
}
