<?php
echo 's';
if(!empty($_POST) && isset($_POST))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$conn=mysqli_connect('localhost','root','','iamsv');
	$q="insert into contact (name,email,subject,message) values ('$name','$email','$subject','$message') ";
	$w=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$r=mysqli_affected_rows($conn);
	if ($w && $r==1)
	{
		echo 'success';
	}
	else
		echo "failed";
}



?>