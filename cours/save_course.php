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
    
    $saveCourse = "insert into enrollments (user_id, course_id)
                    values('$userId', '$courseId')";

    $checkCourse = "select * from enrollments
                    where user_id = '$userId' and course_id = '$courseId'";

    $res = mysqli_query($conn, $checkCourse);

    if(mysqli_num_rows($res) != 0){ // to ckeck if the user already saved that course
        header("Location: courses_list.php");
        exit;
    }
    
    mysqli_query($conn, $saveCourse);

    header("Location: courses_list.php");
    exit;
?>