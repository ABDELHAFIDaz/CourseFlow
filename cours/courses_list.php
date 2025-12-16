<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course & Sections Manager</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js" defer></script>
</head>
<body>

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
                <button class="btn view">View Sections</button>
                <button class="btn add" onclick="openModal('sectionModal')">Add Section</button>
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
<?php
    require_once 'courses_create.php';
?>
<!-- edit course -->
 <?php
    require_once 'courses_edit.php';
 ?>

<!-- ====================
     SECTION MODAL
==================== -->
<?php
    require_once '../sections/sections_create.php';
?>

</body>
</html>
