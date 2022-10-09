<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    .button1{
      margin-left: 650px;
    }
    .menubar{
      margin-left: -35px;
	  
    }

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 30%;
  background-color: grey;
  color: white;
  text-align: center;
}



  </style>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<meta charset="utf-8">
	<!-- <title>E-Home's Services</title> -->
</head>
<body>

<div class="container-xxl bg-white p-0">

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase" >SheHeroes</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">sheheroes@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+91 8200434078</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase"></h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link">HOME</a>
                                <a href="dashbord2.php" class="nav-item nav-link active">WOMEN BUSINESSES</a>
                            <a href="contactus.php" class="nav-item nav-link ">Contact to business<a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

<div>

  <form action="dashboard2.php" method="post">
  <div class="container" style="margin-top:20px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-5">
            <!-- <label for="">City</label> -->
            <br>
            <br>
            <br>
            <br>
            <br>

            <select class="form-field  " style=" width:100%;height: 50px;" name="b_type" id="city">

                <option value="none">Select Business Type</option>
			<option value="Food & snacks">Food & snacks</option>
			<option value="Sweets">Sweets</option>
			<option value="Craft">Craft</option>
			<option value="Art">Art</option>
			<option value="Papads">Papads</option>
			<option value="Home decor">Home decor</option>
			<option value="Choclates">Choclates</option>
			<option value="mukhWas">mukhWas</option>
			<option value="Organic & Vegan">Organic & Vegan</option>
			<option value="Pickles,Masala & Chutneys">Pickles,Masala & Chutneys</option>
			<option value="Beauty & health">Beauty & health</option>
            </select>
        </div>
 
        <div class="form-group col-2">
            <!-- <label for="">Action</label> -->
            <!-- <button id="btnSearch" class="form-control btn btn-success" name = 'btnSearch' type="button">Search</button> -->
            <br>
            <br>
            <br>
            <br><br>
          <button class="btn" name="btnSearch">Search</button>
        </div>
    </div>
</form>
</div>


<div class="table-responsive">
    <br>
<?php

    if(isset($_POST['btnSearch']))
    {
        $b_type = $_POST["b_type"];
        $con = mysqli_connect('localhost','root','','hackathon');
        $query="SELECT * FROM `business` WHERE b_type='".$b_type."' ";
        
    

        $result = mysqli_query($con,$query);
        $row_count = mysqli_num_rows($result);
        // if($row_count==1)
        // {
        //     echo "<script> alert('Data got'); </script>";
        // }
        // else
        // {
        //     echo "<script> alert('Data not got'); </script>";
        // }
        if($result)
        {
            
             if ($row_count == 0)
                {
                    
                    echo "No record found!";
                
                }   
            else {

                echo "<table border='2' align='center' cellspacing='9' cellpadding='10' width='100%' margin-top= '40px'>";
        echo "<tr>
                <th> Business name </th>
                <th> Business owner </th>
                <th> Business info </th>
                <th> Business email </th>
                <th> business Bio </th>
                <th> business Type </th>
            </tr>";
                           
            while($row = mysqli_fetch_array($result))
            {
                
                   
               
                    echo "<tr>
                    <td> " . $row[1] . " </td>
                    <td> " . $row[2] . " </td>
                    <td> " . $row[3] . " </td>
                    <td> " . $row[4] . " </td>
                    <td> " . $row[6] . " </td>
                    <td> " . $row[7] . " </td>
                    <td><a href='contactus.php?id=".$row[4]."'><button bgcolor='blue' class='form-control btn btn-success' name='btnContact' type='button' width='50px'>Contact</button></a></td>
                    </tr>"; 
                    
                    
            }
        }
            
            

                
        }
        
        /*else 
        {   

            echo "No record found!";
        }*/
            
    }        
        ?>
</div>

<div class="footer">
  <div class="container-fluid bg-dark text-light footer wow fadeIn" id="footer" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">SheHeroes</h1></a>
                            <p class="text-white mb-0">
								Joined your hands with us and together let's contribute to the Women Empowerment....
							</p>
                        </div>
                    </div>
            <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>DA-IICT , Gandhinagar , Gujarat , India</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8200434078</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>sheheroes@gmail.com</p>
                        <div class="d-flex pt-2">
                        </div>
                    </div>
                    
                </div>
            </div>
                        
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.html">SheHeroes</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By INFOGEEK
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

</body>
</html>