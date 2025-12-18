<?php
    require_once '../infrastructure/config.php';
    $targetedId = $_GET["id"];
    $delete = "DELETE FROM courses WHERE id = $targetedId";
    $result = mysqli_query($conn, $delete);
    header("Location: courses_list.php");
?>