<?php
    require_once '../infrastructure/config.php';

    require_once "../infrastructure/config.php";

    session_start();

    $username = "";
    $email = "";
    $password = "";
    $errorMess = "";

    // ====== sign up ========================
    if(isset($_POST["signUp"])){

        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // regex
        $reg_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $reg_password = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/";

        // if(!preg_match($reg_email, $email) || !preg_match($reg_password, $password) || empty($name)){
        //     $errorMess = "Invalid input!";
        //     header("location: ../auth/sign_up.php");
        //     exit;
        // }

        // if the userinput is valid
        $saveUser = "insert into users (username, email, password)
                    values ('$username', '$email', '$password')";
        mysqli_query($conn, $saveUser);

        $getUserId = mysqli_query($conn, "select * from users where email = '$email'");
        $data = mysqli_fetch_assoc($getUserId);

        $_SESSION["userId"] = $data["id"];

        header("location: ../cours/courses_list.php");
        exit;
    }

    // ====== login =======================
    if(isset($_POST["login"])){

        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        $selectByEmail = "select * from users where email = '$email'";
        $res = mysqli_query($conn, $selectByEmail);

        if(mysqli_num_rows($res) === 0){
            header("location: ../auth/login.php");
            exit;
        }

        $targetedRow = mysqli_fetch_assoc($res);
        
        if($password != trim($targetedRow["password"])){
            header("location: ../auth/login.php");
            exit;
        }

        $_SESSION["userId"] = $targetedRow["id"];

        header("location: ../cours/courses_list.php");
        exit;
    }