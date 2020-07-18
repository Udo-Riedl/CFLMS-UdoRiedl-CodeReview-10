<?php
    require_once 'db_connect.php';

    if($_POST){
        $id = $_POST["id"];
        $product= $_POST["product"];
        $title= $_POST["title"];
        $img= $_POST["img"];
        $author_regisseur_band= $_POST["author_regisseur_band"];
        $name_title= $_POST["name_title"];
        $isbn= $_POST["isbn"];
        $description= $_POST["description"];
        $published= $_POST["published"];
        $publisher_studio_lable= $_POST["publisher_studio_lable"];
        $name= $_POST["name"];
        $adress= $_POST["adress"];
        $size= $_POST["size"];

        $sql = "UPDATE `media` SET `product`='$product',`title`='$title',`img`='$img',`author_regisseur_band`='$author_regisseur_band',`name_title`='$name_title',`img`='$img',`isbn`='$isbn',`description`='$description',`published`='$published',`publisher_studio_lable`='$publisher_studio_lable',`name`='$name',`adress`='$adress',`size`='$size'
        WHERE id = $id";

        if(mysqli_query($conn , $sql)){
        echo "success <br> <a href='../index.php'>Back to Home page</a>";
        }else {
        echo "error";

        }

    }
?>