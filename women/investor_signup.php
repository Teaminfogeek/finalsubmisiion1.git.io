<?php
	if(isset($_POST['investor_signup_btn']))
	{
	@$i_pass = $_POST["i_pass"];
    @$i_repass = $_POST["i_repass"];
	@$if_name = $_POST["if_name"];
	@$il_name = $_POST["il_name"];
	@$i_gender = $_POST["i_gender"];
	@$i_phone = $_POST["i_phone"];
	@$i_email = $_POST["i_email"];
	$con = mysqli_connect('localhost','root','','hackathon');
	/*if($con)
	echo "Connected successfully.";*/
	$smt="INSERT INTO `investor`(`if_name`, `il_name`, `i_gender`, `i_email`, `i_pass`, `i_repass`, `i_phone`) VALUES ('$if_name','$il_name','$i_gender','$i_email','$i_pass','$i_repass','$i_phone')";
	
	$query=mysqli_query($con,$smt);
	if($query)
		header('location: ../dashboard2.php');
	}
	
	?>