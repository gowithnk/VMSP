<?php
session_start();
include('dbconn.php');
if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$user=$_POST['user'];

$sql="select * from login_user where username='$username' and password='$password'";
$query=mysqli_query($db,$sql);
$check=mysqli_num_rows($query); 
if($check>0)
{
	$fetch=mysqli_fetch_array($query);
	$_SESSION['ROLE']=$fetch['user'];
	$_SESSION['IS_LOGIN']='yes';
	if($fetch['password']==$password )
	{	
		if($fetch['user']==$user && $fetch['user']=='admin')
		{
			echo $_SESSION['ROLE'];
			header('location:../index_1.php');
			die();
		}
		elseif ($fetch['user']==$user && $fetch['user']=='guard') {
			$_SESSION['ROLE']=$fetch['user'];
			header('location:../dashboard.php');
			die();
		}
		else
		{
			echo "<script>
				alert('Please select correct User Type');
				location.href='../index.html';
			</script>";
			die();
		}
	}
	else
	{
		echo "<script>
				alert('Password is incorrect');
				location.href='../index.html';
			</script>";
			die();
	}
}
else
{
			echo "<script>
				alert('Username is incorrect');
				location.href='../index.html';
			</script>";
			die();
}
}else{
	echo "<script>
				alert('PLease enter correct login details!');
				location.href='../index.html';
			</script>";
			die();
}


?>