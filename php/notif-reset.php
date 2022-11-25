<?php 
include('dbconn.php');
$sql = "UPDATE inquery SET status='1'";
$query = mysqli_query($db, $sql);
if($query){
    echo "sucess";
}else{
    echo "Failed";
}
?>