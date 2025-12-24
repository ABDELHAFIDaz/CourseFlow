<?php
    session_start();
    require_once 'courses_create.php';
    if(empty($_SESSION["userId"])){
        header("Location: ../auth/login.php");
        exit;
    }
?>

<!-- header -->
<?php
    require_once '../infrastructure/header.php';
    require_once '../infrastructure/config.php';
    $data = "SELECT * FROM courses";
    $res = mysqli_query($conn, $data);
?>



<!-- ====================
     MAIN CONTENT AREA
==================== -->
<div class="content">
    <h2>Courses</h2>

    <div class="card-container">

        <!-- Example Card 1 -->
        <?php
    while($row = mysqli_fetch_assoc($res)){
?>
        <div class="course-card">
            <h3><?= $row["title"]?></h3>
            <p><?= $row["description"]?></p>
            <p><?= $row["level"]?></p>

            <div class="card-buttons">
                <button class="btn edit" onclick="openModal('courseModalEdit')">Edit</button>
                <a href="courses_delete.php?id=<?= $row["id"] ?>"><button class="btn delete">Delete</button></a>
                <a href="save_course.php?id=<?= $row["id"] ?>"><button class="btn add">Register</button></a>
            </div>
        </div>
<?php
    }
?>
    </div>
</div>


<!-- ====================
     COURSE MODAL
==================== -->
<div id="courseModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('courseModal')">&times;</span>
        <h2>Create Course</h2>

        <form method="POST" action="courses_create.php">
            <label>Course Title</label>
            <input type="text" placeholder="Enter course name" name="title" required>

            <label>Level</label>
            <select name="level" required>
                <option value="">Select level</option>
                <option>Beginner</option>
                <option>Intermediate</option>
                <option>Advanced</option>
            </select>

            <label>Description</label>
            <textarea placeholder="Course description" name="description"></textarea>

            <button type="submit" class="submit-btn" name="submit">Save Course</button>
        </form>
    </div>
</div>

<!-- edit course -->
 <?php
    require_once 'courses_edit.php';
 ?>

<?php
    require_once '../infrastructure/footer.php';
?>
