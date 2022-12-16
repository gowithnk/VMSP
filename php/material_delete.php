<?php
include('dbconn.php');
$id=$_GET['id'];

$sql="DELETE FROM material_pass WHERE id='$id'";
$query=mysqli_query($db,$sql);

if($query)
{
	echo "<script>
		alert('data deleted');
		location.href='material_pass_display.php';
			</script>";
}
else
{
	echo "Error";
}
?>