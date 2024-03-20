<?php
session_start();
if(!isset($_SESSION['adminmaile'])){
    header("Location: adminlogin.php");
    exit();
}
include("connection.php");

$query = "SELECT * FROM userrequest";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: hotpink;
            
              
            
        }h1{
            color:white;
        }
        th{
            color:white
        }
    </style> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">User Requests</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">Looking For</th>
                    <th scope="col">Want to Work With</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['reqid'] . '</td>';
                    echo '<td>' . $row['tell_us'] . '</td>';
                    echo '<td>' . $row['looking'] . '</td>';
                    echo '<td>' . $row['who_work'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
mysqli_close($connection);
?>
