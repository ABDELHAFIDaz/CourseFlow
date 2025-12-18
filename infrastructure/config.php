<?php
    try{
        $conn  = mysqli_connect("localhost", "root", "", "cours_db");
    }
    catch(mysqli_sql_exception){?>
        <h1 style="text-align: center;">No connection!</h1>
    <?php
        exit;
    }
?>
