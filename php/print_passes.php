<?php

// Require composer autoload
require_once( '../vendor/autoload.php');

include('dbconn.php');
$id = $_GET['id'];
// $id = 95;

$sql = "select * from inquery where id='$id'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);

if(mysqli_num_rows($query)>0){
    $data .= '<img style="margin-top:-10px;margin-left:50px;" src="../images/logo.png" width="150px"><br>';
    $data .= '<div style="widthy:100%; ">';
    $data .= '<p style="width:100%;margin-left:-20px;font-size:13px;"><span>Name : </span>' .'<span>' .$fetch[1] .'</span>' 
    .'<span><img style="margin-right:-30px;margin-bottom:-60px;float:right;" src="' .$fetch[9] .'"' .' height="70px" width="70"></span></p>';
    $data .= '<p style="margin-left:-20px;font-size:13px;"><span>Company : </span>' .'<span>' .$fetch[12] .'</span></p>';
    $data .= '<p style="margin-left:-20px;font-size:13px;"><span>Purpose : </span>' .'<span>' .$fetch[13] .'</span></p>';
    $data .= '<p style="margin-left:-20px;font-size:13px;"><span>Person To Meet : </span>' .'<span>' .$fetch[6] .'</span></p>';
    $data .= '<p style="margin-left:-20px;font-size:13px;"><span>Entry Time : </span>' .'<span>' .$fetch[7] .'</span>'
    .'<span><img style="margin-left:20px;margin-bottom:-55px;float:right;" src="' .$fetch[4] .'"' .' height="70px" width="80"></span></p>';
    $data .= '<p style="margin-left:-20px;font-size:13px"><span>Date : </span>' .'<span>' .$fetch[10] .'</span></p>';
    $data .= '<p style="margin-left:-20px;font-size:16px;font-weight:600;">Instruction To Follow:</p>';
    $data .= '<span style="margin-left:-30px;font-size:12px;font-weight:400;">
        Visitors should sign in at the [reception/ gate/ front-office] and show some form of identification.<br>
        Visitors will receive passess and return them to [reception/ gate/ front-office] once the visit is over.<br>
        Employees must always tend to their visitors while they are inside our premises.</span>
    </p>';
    $data .= '</div>';
}else{
    $data = 'No data found';
}

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [100, 150]]);

$mpdf->WriteHTML($data);

$mpdf->Output();
?>
