<?php
    require_once 'actions/db_connect.php';
    if($_GET["id"]){
        $id = $_GET["id"];

       $sql = "SELECT * FROM media WHERE id = $id";
       $result = mysqli_query($conn, $sql); 

       $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

<div class="jumbotron jumbotron-fluid bg-info mb-3">
    <div class="container">
    <h1 class="display-4">You are in the update Section</h1>
    <p class="lead"> @ cr10_udo_riedl_biglibrary.</p>
    </div>
    </div>
    <div class="update">

    <form action="actions/a_update.php" method="post">

    <div class="form-group">

        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"><br>   
        <select class="form-control" input type="text" name="product" value="<?php echo $row['product'] ?>"><br>
            <option>Book</option>
            <option>DVD</option>
            <option>CD</option>
        <input type="text" placeholder="Title" name="title" value="<?php echo $row['title'] ?>"><br>
        <input type="text" placeholder="Sorry NO PICTURES" name="img" value="<?php echo $row['img'] ?>"><br>
        <input type="text" placeholder="Author, Regisseur, Band?" name="author_regisseur_band" value="<?php echo $row['author_regisseur_band'] ?>"><br>
        <input type="text" placeholder="Name or Title" name="name_title" value="<?php echo $row['name_title'] ?>"><br>
        <input type="number" placeholder="ISBN Book code (20)" name="isbn" value="<?php echo $row['isbn'] ?>"><br>
        <input type="text" placeholder="Add a short description:" name="description" value="<?php echo $row['description'] ?>"><br>
        <input type="date" name="published" value="<?php echo $row['published'] ?>"><br>
        <select class="form-control" input type="text" name="publisher_studio_lable" value="<?php echo $row['publisher_studio_lable'] ?>"><br>
            <option>Publisher</option>
            <option>Studio</option>
            <option>Lable</option>
        <input type="text" placeholder="NAME of the Publisher, Studio, Lable " name="name" value="<?php echo $row['name'] ?>"><br>
        <input type="text" placeholder="ADRESS of the Publisher, Studio, Lable " name="adress" value="<?php echo $row['adress'] ?>"><br>
        <select class="form-control" input type="text" name="size" value="<?php echo $row['size'] ?>"><br>
            <option>Big</option>
            <option>Medium</option>
            <option>Independent</option>
            <input class="btn btn-primary" type="submit" value="Submit">
    </div>

    </form>

    </div>
    
</body>
</html>