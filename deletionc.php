<?php
include("connection.php");

if(isset($_GET['delete_id'])) {
    $userid = $_GET['delete_id'];

    $delete = "DELETE FROM client WHERE c_id = ?";
    $stmt = $connection->prepare($delete);
    $stmt->bind_param("i", $userid);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">
        User has been successfully deleted!
        </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        There was a problem deleting the user! Try again.
        </div>';
    }
    
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Deletion</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Users</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM client";
                        $select_query = mysqli_query($connection, $select);

                        while($row = mysqli_fetch_assoc($select_query)) {
                            echo "<tr>";
                            echo "<td>".$row['cid']."</td>";
                            echo "<td>".$row['clientName']."</td>";
                            echo "<td>".$row['clientSurname']."</td>";
                            echo "<td>".$row['clientmaile']."</td>";
                            echo "<td>".$row['phoneNum']."</td>";
                            echo "<td>".$row['area']."</td>";
                            echo "<td><a href='deletionc.php?delete_id=".$row['cid']."'>Delete</a></td>";
                            echo "</tr>";
                        }

                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>