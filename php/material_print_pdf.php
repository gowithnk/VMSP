<?php

// Require composer autoload
require_once('../vendor/autoload.php');
include('dbconn.php');
session_start();
// $phone = $_SESSION['phone'];

$sql = "SELECT * FROM material_pass ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
$challanNo = $fetch[24];
$num = 1;
if(!empty($fetch[20])){
    $tt = '<tr><td style="width:15%"><p>2</p></td><td style="width:15%"><p>' . $fetch[18] . '</p></td><td style="width:15%"><p> ₹ ' . $fetch[19] . '</p></td>
    <td style="width:30%"><p>' . $fetch[17] . '</p></td><td style="width:25%"><p>' . $fetch[20] . '</p></td></tr>';
}
if (mysqli_num_rows($query) > 0) {
    $data = '<div class="print_area p-2">';
    $data .= '<table cellpadding="5" style="width:100%;"><tr><td style="width:20%;text-align:center;"><img style="" src="../images/logo1.png" width="65px"></td>
    <td><p class="mb-1" style="font-size:18px;font-weight:bold;">SYNOKEM PHARMACEUTICALS LIMITED</p>
    <p class="address_area">Plot No. 56 - 57, Sector - 6A, IIE, SIDCUL, Haridwar, Uttarakhand - 249403</p>
    <p >GSTIN No. : 05AAACS1164N1ZC</p>
    <p >Delivery Challan (Material Information)</p>
    </td></tr>
    <tr style="width:100%;"><td></td><td align="right">
    <p>Challan No. : ' . 'P2/2022/GP/' . $challanNo . '</p>
    <p><label>Date & Time :- </label><span>' . $fetch[21] . ', ' . $fetch[23] . '</span></p>
    </td></tr></table>';
    $data .= '<br><hr>';
    $data .= '<div class="wrapper_area p-2 mt-3">';
    $data .= '<table cellpadding="5" style="width:100%;">
    <tr><td style="width:30%"><p>Material Pass :</p></td><td><p>'  .$fetch[25] .'</p></td></tr>
    <tr><td style="width:30%"><p>Material Type :</p></td><td><p>' .$fetch[4] .'</p></td></tr>
    <tr><td style="width:30%"><p>Challan Type :</p></td><td><p>' . $fetch[11] . '</p></td></tr>
    <tr><td style="width:30%"><p>Purpose :</p></td><td><p>' . $fetch[8] . '</p></td></tr>';

    if($fetch[11] === 'RGP'){
        $data .= '<tr><td style="width:30%"><p>Return Date :</p></td><td><p>' . $fetch[12] . '</p></td></tr>';
    }else{$data .= '';}

    $data .= '<tr><th><br><p style="font-size:16px;font-weight:bold;">Material Send To </p></tr>
    <tr><td style="width:30%"><p>Person Name :</p></td><td><p>' . $fetch[9] . '</p></td></tr>
    <tr><td style="width:30%"><p>Company Name :</p></td><td><p>' . $fetch[10] . '</p></td></tr>
    <tr><td style="width:30%"><p>To Location (Address) :</p></td><td><p>' . $fetch[2] . '</p></td></tr>
    <tr><th><br><p style="font-size:16px;font-weight:bold;">Material Send From :</p></tr>
    
    <tr><td style="width:30%"><p>Company Name :</p></td><td><p>SYNOKEM PHARMACEUTICALS LIMITED</p></td></tr>
    <tr><td style="width:30%"><p>From Address :</p></td><td><p>' . $fetch[1] . '</p></td></tr>
    <tr><td style="width:30%"><p>Employee Name :</p></td><td><p>' . $fetch[6] . '</p></td></tr>
    <tr><td style="width:30%"><p>Department :</p></td><td><p>' . $fetch[3] . '</p></td></tr>
    <tr><td style="width:30%"><p>Approved By :</p></td><td><p>' . $fetch[7] . '</p></td></tr>
    </table>';
    $data .= '<br><table cellpadding="5" style="width:100%;">';
    $data .= '<tr><th style="width:15%"><p>Item</p></th><th style="width:15%"><p>Quantity</p></th><th style="width:15%"><p>Amount</p></th>
    <th style="width:30%"><p>Description</p></th><th style="width:25%"><p>Remark</p></th></tr>';
    $data .= ' <tr><td style="width:15%"><p>'.$num .'</p></td><td style="width:15%"><p>' . $fetch[14] . '</p></td><td style="width:15%"><p> ₹ ' . $fetch[15] . '</p></td>
    <td style="width:30%"><p>' . $fetch[13] . '</p></td><td style="width:25%"><p>' . $fetch[16] . '</p></td></tr>';
    if(!empty($fetch[17])){
    $data .= '<tr><td style="width:15%"><p>2</p></td><td style="width:15%"><p>' . $fetch[18] . '</p></td><td style="width:15%"><p> ₹ ' . $fetch[19] . '</p></td>
    <td style="width:30%"><p>' . $fetch[17] . '</p></td><td style="width:25%"><p>' . $fetch[20] . '</p></td></tr>';
    }else{$data .= '';}
    $data .= '</table>';
    $data .= '<br><br><br><br><table cellpadding="5" style="width:100%;"><tr><td style="width:25%;"><p>Prepared By</p></td>
    <td style="width:25%;"><p>Department In-Charge</p></td><td style="width:25%;text-align:center;"><p>HR Dept.</p></td>
    <td style="width:25%;text-align:center;"><p>Approved By</p></td></tr></table><br><br>';
    $data .= '</div>';
    $data .= '</div>';
} else {
    $data = 'No data found';
}

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

$stylesheet = file_get_contents('../assets/css/styles.css');

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML($data);

$mpdf->Output();
?>
