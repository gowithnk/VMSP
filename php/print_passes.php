<?php

// Require composer autoload
require_once( '../vendor/autoload.php');
session_start();
include('dbconn.php');
$id = $_GET['id'];
// $id = 95;

$sql = "SELECT * FROM inquery WHERE id='$id'";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8', 
    'format' => [125, 135],
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 8,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0]);

if(mysqli_num_rows($query)>0){
    $data .= '<table cellpadding="3" style="width:100%;font-size:14px;">
        <tr>
            <td colspan="3" style="width:100%;text-align:center;margin-left:200px;"><img src="../images/logo.png" width="180px"></td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td width="28%">
                <p style="margin-bottom:10px;">Name : </p> 
                <br><p> Company :</p>
            </td>
            <td width="70%" align="left">' .$fetch['Name'] . ' <br><br>  ' .$fetch['Company'] .' </td>
            <td align="right"><img style="margin-bottom:-20px;float:right;" src="' .$fetch['qr_code'] .'"' .' width="75"></td>
        </tr>
        <tr>
            <td width="28%">
                <p style="margin-bottom:10px;">Purpose : </p> 
                <br><p> Person To Meet :</p>
            </td>
            <td colspan="2" align="left">' .$fetch['Purpose'] . ' <br><br>  ' .$fetch['Person_Meet'] .' </td>
        </tr>
        <tr>
            <td width="28%">
                <p style="margin-bottom:10px;">Entry Time : </p> 
                <br><p> Date :</p>
            </td>
            <td align="left">' .$fetch['In_Time'] . ' <br><br>  ' .$fetch['Date'] .' </td>
            <td align="right"><img style="margin-bottom:-20px;float:right;" src="' .$fetch['Image'] .'"' .' width="100" height="90"></td>
        </tr>
        <tr>
            <td colspan="3">
            <p style="font-size:16px;font-weight:600;"><br>Instruction To Follow:</p> 
            </td>
        </tr>
        <tr>
            <td colspan="3" align="left" style="font-size:10px;"><ul> <li>Visitors should sign in at the [reception/ gate/ front-office] and show some form of identification.</li>
            <li>Visitors will receive passess and return them to [reception/ gate/ front-office] once the visit is over.</li>
            <li>Employees must always tend to their visitors while they are inside our premises.</li></ul></td>
        </tr>
        <tr>
            <td colspan="3" style="width:100%;text-align:center;margin-left:200px;"><br><img src="../images/visitor-logo.png" width="180px"></td>
        </tr>
    </table>';
}else{
    $data = 'No data found';
}

$mpdf->WriteHTML($data);

$mpdf->Output();
?>
