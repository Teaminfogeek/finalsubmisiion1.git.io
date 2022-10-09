<?php
	session_start();
	
if(isset($_POST['women_login_btn']))
{

$con = mysqli_connect('localhost','root','','hackathon');

$w_email =$_POST['w_email'];
$w_pass = $_POST['w_pass'];

$sql = "SELECT * FROM `women` WHERE `women`.`w_email` = '$w_email' and `women`.`w_pass` = '$w_pass' ";
$query=mysqli_query($con,$sql);

$num_rows = mysqli_num_rows($query);

if($num_rows == 1) 
{
		$raw=mysqli_fetch_array($query);
		$_SESSION["w_id"] = $raw[0];
		$_SESSION["w_name"] = $raw[1];		
	  header('Location: index.html');
	  

}
 else
 {
	echo "you are not a valid user!";
 }

 }


?>