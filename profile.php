<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background: hotpink;
        }
        .container {
            margin-top: 100px;
            max-width: 400px;
        }
        .btn-exit {
            margin-top: 20px;
            color: hotpink;
            background-color: white;
            border: 1px solid white;
            
        }
        h5{
            margin-top: 40px;
            color:white;
        }
        h3{
            margin-top: 40px;
            color:white;
        }
        .btn-exit:hover {
            background-color: white;
        }
        .alert-danger {
            margin-top: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container text-center">
        <?php
            session_start();
            if(isset($_SESSION["maile"])) {
                echo "<h3>Welcome, ".$_SESSION["infname"]."</h3>";
                echo "<h5>You will get an email to ".$_SESSION["maile"]."</h5>";
                echo "<h5> Please wait we contact with you </h5>";
                echo "<a href='exit.php' class='btn btn-exit'>Exit</a>";
            } else {
                echo "<div class='alert alert-primary' role='alert'>You are not allowed to display this page</div>";
            }
        ?>
    </div>
</body>
</html>