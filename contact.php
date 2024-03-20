<?php

include("connection.php");

if(isset($_POST["Submit"]))
{
    $yname=$_POST["yname"];
    $ymaile=$_POST["ymaile"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];


    if(empty($yname) || empty($ymaile) || empty($subject) || empty($message)) {
        echo '<div class="alert alert-danger" role="alert">
        Please fill in all fields!
        </div>';
    }  else {
        $add="INSERT INTO contactt (yname, ymaile, subject, message)   VALUES ('$yname',' $ymaile','$subject','$message')";
        $work_add = mysqli_query($connection, $add);

        if ($work_add) {
            echo '<div class="alert alert-success" role="alert">
            Your request was send succesfully!
            </div>';
        }
        
    }
   
    
    mysqli_close($connection);
}


?>





<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Contact</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3W9z9IocH1z2b8T6lQDfMf5/UTct0/+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
        h1 {
            font-size: 3rem; 
            font-weight: bold; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            color : whitesmoke;

        }
        body{
        

            background-color:hotpink;
          
        }
    </style>
</head>
<body>
      
            <div class="container">

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="index.html">
                        <img src="http://localhost/infuyelik/influenza.jpeg" class="logo-image img-fluid" style="width: 10%; height: 10%;">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="about.html">About</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/infuyelik/contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
               
                <h1 class="text-center my-3">Contact us</h1>
              
                <p class="text-center w-responsive mx-auto mb-5">
                    Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.
                </p>

                <div class="row">

                    <div class="col-md-9 mb-md-0 mb-5">
                        <form action="contact.php" method="POST">

                            
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="yname" name="yname" class="form-control">
                                        <label class="my-2" for="yname" >Your Name</label>
                                    </div>
                                </div>
                  
                                <div class="col-md-6">
                                    <div class="md-form ">
                                        <input type="text" id="ymaile" name="ymaile" class="form-control">
                                        <label class="my-2" for="ymaile" >Your E-mail</label>
                                    </div>
                                </div>
                             

                            </div>
                  
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form ">
                                        <input type="text" id="subject" name="subject" class="form-control">
                                        <label class="my-2" for="subject" >Subject</label>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">

                  
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label class="my-2" for="message">Your Message</label>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" name="Submit" type="Submit" value="Submit" id="Submit" />
                                </div>
                        <div class="status"></div>
                    </div>
                    
                        </form>

                        

                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">

                            <li>
                                <i class="fas fa-phone mt-4 fa-2x" style="color:white"></i>
                                <p>+ 90 544 675 36 13</p>
                            </li>

                            <li>
                                <i class="fas fa-envelope mt-4 fa-2x" style="color:white"></i>
                                <p>Help@influenza.com</p>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt mt-4 fa-2x" style="color:white"></i>
                                <p>Zorlu Center A Blok  No : 47, Istanbul, TR</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>  
 
 document.getElementById("Submit").addEventListener("click", function(event){
   var yname = document.getElementById("yname").value;
   var ymaile = document.getElementById("ymaile").value;
   var subject = document.getElementById("subject").value;
   var message = document.getElementById("message").value;
   
   
   if(yname == "" || ymaile == "" || subject == "" || message == ""){
     event.preventDefault();
     alert("Please fill in all fields");
   } else if(message.length < 50){
     event.preventDefault();
     alert("You need to write at least 50 characters");
   }
 });
 </script>  
 



        </body>
</html>
