<?php
    try{
        $conn  = mysqli_connect("localhost", "root", "", "cours_db");
    }
    catch(mysqli_sql_exception){
        echo "Could not connect!";
    }
?>
