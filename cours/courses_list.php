<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course & Sections Manager</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<!-- header -->
<?php
    require_once '../infrastructure/header.php';
?>


<!-- ====================
     MAIN CONTENT AREA
==================== -->
<div class="content">
    <h2>Courses</h2>

    <div class="card-container">

        <!-- Example Card 1 -->
        <div class="course-card">
            <h3>JavaScript Basics</h3>
            <p>Level: Beginner</p>

            <div class="card-buttons">
                <button class="btn edit">Edit</button>
                <button class="btn delete">Delete</button>
                <button class="btn view">View Sections</button>
                <button class="btn add" onclick="openModal('sectionModal')">Add Section</button>
            </div>
        </div>

        <!-- Example Card 2 -->
        <div class="course-card">
            <h3>PHP & MySQL</h3>
            <p>Level: Intermediate</p>

            <div class="card-buttons">
                <button class="btn edit">Edit</button>
                <button class="btn delete">Delete</button>
                <button class="btn view">View Sections</button>
                <button class="btn add" onclick="openModal('sectionModal')">Add Section</button>
            </div>
        </div>

        <!-- Example Card 3 -->
        <div class="course-card">
            <h3>HTML & CSS</h3>
            <p>Level: Beginner</p>

            <div class="card-buttons">
                <button class="btn edit">Edit</button>
                <button class="btn delete">Delete</button>
                <button class="btn view">View Sections</button>
                <button class="btn add" onclick="openModal('sectionModal')">Add Section</button>
            </div>
        </div>

        <!-- PHP will loop and generate more cards -->
    </div>
</div>


<!-- ====================
     COURSE MODAL
==================== -->
<?php
    require_once 'courses_create.php';
?>

<!-- ====================
     SECTION MODAL
==================== -->
<?php
    require_once '../sections/sections_create.php';
?>

<script>
function openModal(id) {
    document.getElementById(id).style.display = "flex";
}

function closeModal(id) {
    document.getElementById(id).style.display = "none";
}

window.onclick = function(e) {
    if (e.target.classList.contains("modal")) {
        e.target.style.display = "none";
    }
}
</script>

</body>
</html>
