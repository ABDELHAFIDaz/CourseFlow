<?php
    if(isset($_POST["submit"])){
        $title = trim($_POST["title"]);
        $description = trim($_POST["description"]);
        $level = $_POST["level"];
        if((!empty($title)) && (!empty($description)) && (in_array($level, ["Beginner", "Intermediate", "Advanced"]))){
            $saveCours = mysqli_query($conn, "INSERT INTO courses (title, description, level) VALUES('$title', '$description', '$level')");
            header("Location: cours/courses_list.php");
        }
        else{
            echo "Invalid input!";
        }
    }
?>