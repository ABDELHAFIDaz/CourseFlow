<?php 
    session_start();
    var_dump($_GET);
?>

<?php
    $uninscrptedUsers = "select * from users
            join enrollments
            where users.id != enrollments.user_id"

    // $numberOfInscrption = "select * from users
    //                           "

?>