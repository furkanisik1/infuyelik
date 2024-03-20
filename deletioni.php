<?php
include("connection.php");

if(isset($_GET['delete_id'])) {
    $userid = $_GET['delete_id'];

    $delete = "DELETE FROM influencer WHERE inf_id = ?";
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
    
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Influencer Deletion</title>
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
                        $select = "SELECT * FROM influencer";
                        $select_query = mysqli_query($connection, $select);

                        while($row = mysqli_fetch_assoc($select_query)) {
                            echo "<tr>";
                            echo "<td>".$row['inf_id']."</td>";
                            echo "<td>".$row['infname']."</td>";
                            echo "<td>".$row['infsurname']."</td>";
                            echo "<td>".$row['social']."</td>";
                            echo "<td>".$row['maile']."</td>";
                            echo "<td>".$row['password']."</td>";
                            echo "<td>".$row['background']."</td>";
                            echo "<td>".$row['stream']."</td>";
                            echo "<td><a href='deletioni.php?delete_id=".$row['inf_id']."'>Delete</a></td>";
                            echo "</tr>";
                        }

                        mysqli_close($connection);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>