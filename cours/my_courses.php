<?php
    session_start();
    if(empty($_SESSION["userId"])){
        header("Location: ../auth/login.php");
        exit;
    }

    require_once "../infrastructure/header.php";
    require_once '../infrastructure/config.php';

    $userId = $_SESSION["userId"];
    $userCourse = "select courses.id, courses.title, courses.description, courses.level from courses
                    join enrollments on enrollments.course_id = courses.id
                    where enrollments.user_id = '$userId'";
    $res = mysqli_query($conn, $userCourse);
?>
<div class="content">
    <h2>My Courses are <?= mysqli_num_rows($res)?></h2>

    <div class="card-container" id="my-courses">

        <?php
    while($row = mysqli_fetch_assoc($res)){
?>
        <div class="course-card">
            <h3><?= $row["title"]?></h3>
            <p><?= $row["description"]?></p>
            <p><?= $row["level"]?></p>

            <div class="card-buttons">
                <a href="unsave_course.php?id=<?= $row["id"] ?>"><button class="btn delete">Unsave</button></a>
            </div>
        </div>
<?php
    }
?>
    </div>
</div>
<?php
    require_once "../infrastructure/footer.php";
?>