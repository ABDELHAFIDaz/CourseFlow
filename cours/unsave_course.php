<?php
    session_start();
    require_once 'courses_create.php';
    if(empty($_SESSION["userId"])){
        header("Location: ../auth/login.php");
        exit;
    }

    require_once "../infrastructure/config.php";

    $userId = $_SESSION["userId"];
    $courseId = $_GET["id"];
    
    $unsaveCourse = "delete from enrollments where user_id = '$userId' and course_id = '$courseId'";

    mysqli_query($conn, $unsaveCourse);

    header("Location: my_courses.php");
    exit;
?>