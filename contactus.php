<?php
//get data from form 
if(isset($_POST['submit']))
{
    session_start();
    @$wid = $_GET["id"];
    echo $wid;
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = $wid;
    $subject = "Mail From website";
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@sheHero.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("dashboard2.php");
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>contact to business</title>
  <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li><a href="#signup"  role="tab" data-toggle="tab">contact to business</a></li>

        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"></h2>
            <form action="contactus.php" method="post" id="signup">
              <div class="row">
                  
                  <div class="form-group">
                    <label><font size="3px"></font><span class="req"></span> </label><br>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Investor Name " required data-validation-required-message="Please enter Investor Name." autocomplete="off">
                    <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label><font size="3px"></font><span class="req"></span> </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Investor Email" required data-validation-required-message="Please enter Investor Email" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label><font size="3px"></font><span class="req"></span> </label>
                <input type="" class="form-control" id="message" name="message" placeholder="Enter Investor Message" required data-validation-required-message="Please enter the message you want that what we have to improve." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
			  <br>
			  <br>
			<div class="buttons">

            <div class="action_btn">

            <button type="button" name="submit" class="action_btn submit" width="200px" type="submit" value="Submit" onclick="myFunction()">Submit</button>

            <p id="saved"></p>

            </div>
		<!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>