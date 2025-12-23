<?php
    require_once '../infrastructure/config.php';

    require_once "../infrastructure/config.php";

    $username = "";
    $email = "";
    $password = "";
    $errorMess = "";

    if(isset($_POST["signUp"])){

        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // regex
        $reg_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $reg_password = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/";

        if(!preg_match($reg_email, $email) || !preg_match($reg_password, $password) || empty($name)){
            $errorMess = "Invalid input!";
            return;
        }

        // if the userinput is valid
        $saveUser = "insert into users (username, email, password_hashed)
                    values ('$username', '$email', '$password')";
        $res = mysqli_query($conn, $saveUser);

        header("location: ../cours/courses_list.php");
        exit;
    }

    if(isset($_POST["login"])){

    }