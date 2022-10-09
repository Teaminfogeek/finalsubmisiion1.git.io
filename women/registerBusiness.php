<?php
session_start();
	if(isset($_POST['submit']))
	{
		
		
	@$b_name = $_POST["b_name"];
    @$b_owner = $_SESSION["w_name"];
	@$b_info = $_POST["b_info"];
    @$b_email = $_POST["b_email"];
	@$b_mobile = $_POST["b_mobile"];
	@$b_bio = $_POST["b_bio"];
    @$b_type = $_POST["b_type"];
	$con = mysqli_connect('localhost','root','','hackathon');
	/*if($con)
	echo "Connected successfully.";*/
	$smt="INSERT INTO `business`(`b_name`, `b_owner`, `b_info`, `b_email`, `b_mobile`,`b_bio`,`b_type`)  VALUES ('$b_name','$b_owner','$b_info','$b_email','$b_mobile','$b_bio','$b_type')";
	
		$query=mysqli_query($con,$smt);
		if($query)
			header('location: index.html');
	}
	
	?>