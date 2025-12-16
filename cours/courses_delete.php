<?php
    require_once '../infrastructure/config.php';
    $targetedId = $_GET["id"];
    $delete = mysqli_query($conn, "DELETE FROM courses WHERE id = $targetedId");
    require_once "courses_list.php";
?>