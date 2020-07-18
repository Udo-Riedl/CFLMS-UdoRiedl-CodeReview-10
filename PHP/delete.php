<?php
    require_once 'actions/db_connect.php';
    if($_GET["id"]){
        $id = $_GET["id"];

        $sql = "DELETE FROM media WHERE id = $id";

        if(mysqli_query($conn, $sql)){
            echo "success <br> <a href='index.php' >Back to home page</a>";
        }else{
            echo "error";
        }
    }
    $conn->close();
?>