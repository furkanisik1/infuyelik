<?php
include("connection.php");

$clients = mysqli_query($connection, "SELECT cid, clientName, clientSurname, clientmaile FROM client");
$influencers = mysqli_query($connection, "SELECT inf_id, infname, infsurname, social, maile , stream FROM influencer");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: hotpink;
            
              
            
        }h1{
            color:white;
            margin: top 50px;
            text-align: center;
        }
        th{
            color:white
        }
        .form-label {
            font-size: 36px;  /* yazı boyutunu ayarlar */
            color: white;  /* yazı rengini ayarlar */
            
        }
    
    </style> 
</head>
<body>
    <h1>Client and Influencer Matching</h1>

    <form action="match.php" method="POST">
        <div class=" my-5">
            <label for="cid" class="form-label">Client</label>
            <select id="cid" name="cid" class="form-control">
                <?php while($client = mysqli_fetch_assoc($clients)) : ?>
                    <option value="<?php echo $client['cid']; ?>">
                        <?php echo $client['clientName'].' '.$client['clientSurname'].' - '.$client['clientmaile']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class=" my-5">
            <label for="inf_id" class="form-label">Influencer</label>
            <select id="inf_id" name="inf_id" class="form-control">
                <?php while($influencer = mysqli_fetch_assoc($influencers)) : ?>
                    <option value="<?php echo $influencer['inf_id']; ?>">
                        <?php echo $influencer['infname'].' '.$influencer['infsurname'].' - '.$influencer['social'].' - '.$influencer['stream'].' - '.$influencer['maile']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-outline-primary my-4 btn-lg">Match</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
    $cid = $_POST["cid"];
    $inf_id = $_POST["inf_id"];

    $sql = "INSERT INTO client_influencer_match (cid, inf_id) VALUES ('$cid', '$inf_id')";
    $result = mysqli_query($connection, $sql);

    
    if($result){
        echo '<div class="alert alert-success" role="alert">
        Client and Influencer matched successfully!
        </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        There was a problem with the matching process. Please try again.
        </div>';
    }
}

?>

