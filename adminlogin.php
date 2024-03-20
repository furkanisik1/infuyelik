<?php

include("connection.php");

if(isset($_POST["Submit"]))
{
    $adminmaile=$_POST["adminmaile"];
    $adminpassword=$_POST["adminpassword"];

if(isset($adminmaile) && isset($adminpassword))

{

    $selection = "SELECT * FROM adminpanel WHERE adminmaile ='$adminmaile'";
    $work=mysqli_query($connection,$selection);
    $registernum = mysqli_num_rows($work); 

if($registernum>0) 
{
    $related_records = mysqli_fetch_assoc($work);
    $dbadminpassword=$related_records["adminpassword"];

    if($adminpassword == $adminpassword)
    {
        session_start();
        $_SESSION["adminname"]=$related_records["adminname"];
        $_SESSION["adminsurname"]=$related_records["adminsurname"];
        $_SESSION["adminmaile"]=$related_records["adminmaile"];
        header("location:capth.html");
        
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Your password is wrong!
        </div>';
    }

}
else
{
    echo '<div class="alert alert-danger" role="alert">
        Your email is wrong!
        </div>';
}
    mysqli_close($connection);
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        
        .gradient-custom {
         
            background: #f093fb;
            
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));
            
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>
<body>
<section class="gradient-custom">
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

                            <li class="nav-item dropdown">

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item text-white" href="listing-page.html">Listing Page</a></li>

                                    <li><a class="dropdown-item text-white" href="detail-page.html">Detail Page</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
</section>    

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="display 2 text-primary mb-4  pb-2 pb-md-0 mb-md-5">Admin Login</h3>
                            <form action="adminlogin.php" method="POST">

                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="adminmaile" name="adminmaile" class="form-control form-control-lg" />
                                            <label class="form-label" for="adminmaile">Email</label>
                                        </div>

                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="password" id="adminpassword" name="adminpassword" class="form-control form-control-lg" />
                                            <label class="form-label" for="adminpassword">Password</label>
                                        </div>

                                    </div>
                                   
                                </div>
                       
                                </div>

                                <div class="d-flex justify-content-center mb-5">
                                    <input class="btn btn-primary btn-lg" name="Submit" type="Submit" value="Submit" id="Submit" />
                                </div>

                              
                            <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<script>  
 
document.getElementById("Submit").addEventListener("click", function(event){
  var adminmaile = document.getElementById("adminmaile").value;
  var adminpassword = document.getElementById("adminpassword").value;
 
  
  if( adminmaile == "" || adminpassword == ""){
    event.preventDefault();
    alert("Please fill in all fields");
  } else if(adminpassword.length < 8){
    event.preventDefault();
    alert("Password must be at least 8 characters");
  }
});
</script>  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
</body>
</html> 

?>