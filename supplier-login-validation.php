<?php
	$user=	$_POST['username'];
	$pass=	$_POST['password'];
	$conn=mysqli_connect('localhost','root','','Agri+');
if(!$conn)
	{
		die('Connection Failed:'.mysqli_connect_error());
	}else
	{
	$query=mysqli_query($conn,"select * from registration where uid='".$user."'&& pass='".$pass."' ");
	}		
	if($query==True)
	{
		echo"success\n";
	}
	else
	{
		echo"failed";
	}
	$rowcount=mysqli_num_rows($query);
	if($rowcount==True)
	{
		header('location:supplier-postadd.html');
	}
	else
	{
		header('location:supplier-reg.html');
	}


?>