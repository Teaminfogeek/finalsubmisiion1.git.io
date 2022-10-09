<?php
	if(isset($_POST['women_signup_btn']))
	{
	@$w_pass = $_POST["w_pass"];
    @$w_repass = $_POST["w_repass"];
	@$wf_name = $_POST["wf_name"];
	@$wl_name = $_POST["wl_name"];
	@$w_gender = $_POST["w_gender"];
	@$w_phone = $_POST["w_phone"];
	@$w_email = $_POST["w_email"];
	$con = mysqli_connect('localhost','root','','hackathon');
	/*if($con)
	echo "Connected successfully.";*/
	$smt="INSERT INTO `women`(`wf_name`, `wl_name`, `w_gender`, `w_email`, `w_pass`, `w_repass`, `w_phone`)VALUES ('$wf_name','$wl_name','$w_gender','$w_email','$w_pass','$w_repass','$w_phone')";
	
	$query=mysqli_query($con,$smt);
	if($query)
		header('location: dump.php');
	}
	/*if($query)
		*/
	?>