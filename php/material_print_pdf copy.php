<?php

// Require composer autoload
require_once( '../vendor/autoload.php');
$id=$_GET['id'];
include('dbconn.php');
session_start();
// $phone = $_SESSION['phone'];

$sql = "SELECT * FROM material_pass ORDER BY id DESC LIMIT 1";
$query = mysqli_query($db, $sql);
$fetch = mysqli_fetch_array($query);

if(mysqli_num_rows($query)>0){
    $data .= '<div class="print_area">';
    $data .= '<img style="margin-top:-20px; margin-bottom:20px;" src="../images/logo.png" width="150px"><br>';
    $data .= '<p class="address_area">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
    the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p><br><hr>';
    $data .= '<div class="wrapper_area p-2 mt-3">';

    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">From Location : &nbsp;</b><span>' .$fetch[1] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-1">
    <p><b style="font-weight:bold;">To Location : &nbsp;</b><span>' .$fetch[2] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Department : &nbsp;</b><span>' .$fetch[3] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Item Category : &nbsp;</b><span>' .$fetch[4] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Item Sub Category : &nbsp;</b><span>' .$fetch[5] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Employee Id : &nbsp;</b><span>' .$fetch[6] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Approved By : &nbsp;</b><span>' .$fetch[7] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Purpose : &nbsp;</b><span>' .$fetch[8] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Person Name : &nbsp;</b><span>' .$fetch[9] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Company Name : &nbsp;</b><span>' .$fetch[10] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Return Type : &nbsp;</b><span>' .$fetch[11] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Estimated Return Date : &nbsp;</b><span>' .$fetch[12] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2">
    <p><b style="font-weight:bold;">Date : &nbsp;</b><span>' .$fetch[21] .'</span></p>
    </div>';
    $data .= '<div class="data_row mt-2 mb-1">
    <p><b style="font-weight:bold;">OutTime : &nbsp;</b><span>' .$fetch[23] .'</span></p>
    </div><hr class="mt-1">';
    $data .= '<div class="data_row mt-2">
    <li style="margin-left:20px;"><b style="font-weight:bold;">Item Description : &nbsp;</b><span>' .$fetch[13] .'</span></li>
    </div>';
    $data .= '<div class="data_row">
    <p><b style="font-weight:bold;">Item Quantity : &nbsp;</b><span>' .$fetch[14] .'</span></p>
    </div>';
    $data .= '<div class="data_row">
    <p><b style="font-weight:bold;">Amount : &nbsp;</b><span>' .$fetch[15] .'</span></p>
    </div>';
    $data .= '<div class="data_row">    
    <p><b style="font-weight:bold;">Remark : &nbsp;</b><span>' .$fetch[16] .'</span></p>
    </div>';
    $data .= '</div>';
    $data .= '</div>';
}else{
    $data = 'No data found';
}

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

$stylesheet = file_get_contents('../assets/css/styles.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML($data);

$mpdf->Output();
?>

