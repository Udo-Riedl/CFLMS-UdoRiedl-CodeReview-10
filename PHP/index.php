<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Codereview 10</title>
</head>
<body>

<div class="jumbotron jumbotron-fluid bg-info mb-3">
    <div class="container">
    <h1 class="display-4">You are in the update / delete Section</h1>
    <p class="lead"> @ cr10_udo_riedl_biglibrary.</p>
    </div>
    </div>

    <div class= "index">
    <?php
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM media";
        $result = mysqli_query($conn, $sql);
        $conn->close();
        if($result->num_rows == 0 ){
            echo "NO RESULT";
        }elseif($result->num_rows == 1){
            $row = $result->fetch_assoc();
            echo $row["product"]." ".$row["title"]." ".$row["img"]." ".$row["author_regisseur_band"]." ".$row["name_title"]." ".$row["isbn"]." ".$row["description"]." ".$row["published"]." ".$row["publisher_studio_lable"]." ".$row["name"]." ".$row["adress"]." ".$row["size"] ." <a href='update.php?id=".$row["id"]."'>Update</a> <a href='delete.php?id=".$row["id"]."
            '>Delete</a>";
        }else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value) {
                echo $value["id"]. " ----- " .$value["product"]." ".$value["title"]." ".$value["img"]." ".$value["author_regisseur_band"]." ".$value["name_title"]." ".$value["isbn"]." ".$value["description"]." ".$value["published"]." ".$value["publisher_studio_lable"]." ".$value["name"]." ".$value["adress"]." ".$value["size"]. " <a href='update.php?id=".$value["id"]." '>Update</a> <a href='delete.php?id=".$value["id"]."'>Delete</a><br>";
            }
        }
        
    ?>
    </div>
</body>
</html>