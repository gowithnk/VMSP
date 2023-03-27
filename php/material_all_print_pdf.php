<?php

// Require composer autoload
require_once('../vendor/autoload.php');
include('dbconn.php');
session_start();
$pid = $_GET['id'];
$sql = "SELECT * FROM material_pass where id='$pid' ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);
$challanNo = $fetch['ChallanNo'];
$sNum = 1;
$mid = $fetch['id'];

if (mysqli_num_rows($query) > 0) {
    $data = '<div class="print_area p-2">';
    $data .= '<table cellpadding="5" style="width:100%;"><tr><td style="width:20%;text-align:center;"><img style="" src="../images/logo1.png" width="65px"></td>
    <td><p class="mb-1" style="font-size:18px;font-weight:bold;">SYNOKEM PHARMACEUTICALS LIMITED</p>
    <p class="address_area"> '.$fetch['FromLocation'] .'</p>
    <p >GSTIN No. : 05AAACS1164N1ZC</p>
    <p >Delivery Challan (Material Information)</p>
    </td></tr>
    <tr style="width:100%;"><td></td><td align="right">
    <p>Challan No. : ' . 'P2/2022/GP/' . $challanNo . '</p>
    <p><label>Date & Time :- </label><span>' . $fetch['Date'] . ', ' . $fetch['OutTime'] . '</span></p>
    </td></tr></table>';
    $data .= '<br><hr>';
    
    $data .= '<div class="wrapper_area p-2 mt-1">';
    $data .= '<table cellpadding="5" style="width:100%;">
    <tr><td style="width:30%"><p>Material Pass :</p></td><td><p>'  .$fetch['MaterialPass'] .'</p></td></tr>
    <tr><td style="width:30%"><p>Material Type :</p></td><td><p>' .$fetch['ItemCategory'] .'</p></td></tr>
    <tr><td style="width:30%"><p>Challan Type :</p></td><td><p>' . $fetch['ReturnType'] . '</p></td></tr>
    <tr><td style="width:30%"><p>Purpose :</p></td><td><p>' . $fetch['Reason'] . '</p></td></tr>';
    
    if($fetch["ReturnType"] === 'RGP'){
        $data .= '<tr><td style="width:30%"><p>Return Date :</p></td><td><p>' . $fetch['EstimatedReturnDate'] . '</p></td></tr>';
    }else{$data .= '';}
    $data .= '</table>';
    $data .= '<br><hr>';

    $data .= '<table width="100%"><tr><th style="width:30%"><br><p style="font-size:16px;font-weight:bold;">Material Send To :</p></th></tr>
    <tr><td style="width:30%"><p>Person Name :</p></td><td><p>' . $fetch['PersonName'] . '</p></td></tr>
    <tr><td style="width:30%"><p>Company Name :</p></td><td><p>' . $fetch['CompanyName'] . '</p></td></tr>
    <tr><td style="width:30%"><p>To Location (Address) :</p></td><td><p>' . $fetch['ToLocation'] . '</p></td></tr></table>';
    
    $data .= '<br><hr>';
    $data .= '<table width="100%"><tr><th style="width:30%"><br><p style="font-size:16px;font-weight:bold;">Material Send From :</p></th></tr>
    <tr><td style="width:30%"><p>Company Name :</p></td><td><p>SYNOKEM PHARMACEUTICALS LIMITED</p></td></tr>
    <tr><td style="width:30%"><p>From Address :</p></td><td><p>' . $fetch['FromLocation'] . '</p></td></tr>
    <tr><td style="width:30%"><p>Employee Name :</p></td><td><p>' . $fetch['EmpId'] . '</p></td></tr>
    <tr><td style="width:30%"><p>Department :</p></td><td><p>' . $fetch['Department'] . '</p></td></tr>
    <tr><td style="width:30%"><p>Approved By :</p></td><td><p>' . $fetch['ApprovedBy'] . '</p></td></tr>
    </table>';

    $data .= '<br><table cellpadding="5" style="width:100%;border:1px solid gray;">';
    $data .= '<tr style="width:100%;border:1px solid gray;"><th style="width:15%"><p>Item</p></th><th style="width:15%"><p>Quantity</p></th><th style="width:15%"><p>Amount</p></th>
    <th style="width:30%"><p>Description</p></th><th style="width:25%"><p>Remark</p></th></tr>';
    
    $sql2 = "SELECT * FROM material_items where id = '$mid' ORDER BY id DESC";
    $query2 = mysqli_query($db, $sql2);

    while($midata = mysqli_fetch_array($query2)){
    if(!empty($midata['id'])){
    $data .= '<tr style="border-top:1px solid lightgray;"><td style="width:15%"><p>' .$sNum++  .'</p></td><td style="width:15%"><p>' . $midata['ItemQuantity'] 
    . '</p></td><td style="width:15%"><p> ₹ ' . $midata['ItemAmount'] . '</p></td>
    <td style="width:30%"><p>' . $midata['ItemDescription'] . '</p></td><td style="width:25%"><p>' . $midata['ItemRemark'] . '</p></td></tr>';
    }else{$data .= '';}
    };

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
