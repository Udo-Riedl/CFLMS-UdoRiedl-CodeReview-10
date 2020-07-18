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
    <h1 class="display-4">Welcom @ cr10_udo_riedl_biglibrary</h1>
    <p class="lead">Create, Read, Update & Delete.</p>
    </div>
    </div>

    <div class= "create">

    <form action="actions/a_create.php" method="post">

    <div class="form-group">
        
    <select class="form-control" input type="text" name="product"><br>
            <option>Book</option>
            <option>DVD</option>
            <option>CD</option>
        <input type="text" placeholder="Title" name="title"><br>
        <input type="text" placeholder="Sorry NO PICTURES" name="img"><br>
        <input type="text" placeholder="Author, Regisseur, Band?" name="author_regisseur_band"><br>
        <input type="text" placeholder="Name or Title" name="name_title"><br>
        <input type="number" placeholder="ISBN Book code (20)" name="isbn"><br>
        <input type="text" placeholder="A short description:" name="description"><br>
        <input type="date" name="published"><br>
        <select class="form-control" input type="text" name="publisher_studio_lable"><br>
            <option>Publisher</option>
            <option>Studio</option>
            <option>Lable</option>
        <input type="text" placeholder="NAME of the Publisher, Studio, Lable " name="name"><br>
        <input type="text" placeholder="ADRESS of the Publisher, Studio, Lable " name="adress"><br>
        <select class="form-control" input type="text" name="size"><br>
            <option>Big</option>
            <option>Medium</option>
            <option>Independent</option> 
            <input class="btn btn-primary" type="submit" value="Submit">

    </div>
    </form>

    </div>
    
</body>
</html>