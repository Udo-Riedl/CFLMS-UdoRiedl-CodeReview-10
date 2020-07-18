<?php
    require_once 'db_connect.php';

    if($_POST){
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

        $sql = "INSERT INTO `media`(`product`, `title`, `img`, `author_regisseur_band`, `name_title`, `isbn`, `description`, `published`, `publisher_studio_lable`, `name`, `adress`, `size`) VALUES ('$product', '$title', '$img', '$author_regisseur_band', '$name_title', '$isbn', '$description', '$published', '$publisher_studio_lable', '$name', '$adress', '$size')";

if(mysqli_query($conn, $sql)){
    echo "success <br>
        <a href='../index.php'>Back to the home page</a>
    ";
}else {
    echo "error";
    }

} 

?>