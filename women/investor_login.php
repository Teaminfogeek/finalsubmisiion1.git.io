<?php
	session_start();
	
if(isset($_POST['investor_login_btn']))
{

$con = mysqli_connect('localhost','root','','hackathon');

$i_email =$_POST['i_email'];
$i_pass = $_POST['i_pass'];

$sql = "SELECT * FROM `investor` WHERE `investor`.`i_email` = '$i_email' and `investor`.`i_pass` = '$i_pass' ";
$query=mysqli_query($con,$sql);

$num_rows = mysqli_num_rows($query);

if($num_rows == 1) 
{
		$raw=mysqli_fetch_array($query);
		$_SESSION["i_id"] = $raw[0];		
	  header('Location: ../dashboard2.php');
	  

}
 else
 {
	
	echo "<script> alert('you are not a valid user!'); </script>";
	header('Location: ../investors.html');
 }

 }


?>