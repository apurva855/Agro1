<?php
		$fname=		$_POST['fname'];
		$contact=	$_POST['contact'];
		$uid=		$_POST['uid'];
		$pass=		$_POST['pass'];
		$address=	$_POST['address'];	
		$conn=mysqli_connect('localhost','root','','Agri+');
	if(!$conn)
	{
		die('Connection Failed:'.mysqli_connect_error());
	}else{
		$query="insert into registration(fname,address,pass,uid,contact)
		values('".$fname."',".$address."','".$pass."','".$uid."','".$contact."')";
		$stmt=mysqli_query($conn,$query); 
		echo "Registered Successfully!";
		if($stmt==TRUE)
		{
			header('location:supplierlogin.html');
		}else
		{
			die("failed".mysqli_error($conn));}
		
			$conn->close();
		}
		?>
	