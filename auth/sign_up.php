<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Sign Up</title>
    <link rel="stylesheet" href="../style/auth.css">
    <script src="../script.js" defer></script>
</head>
<body>

<div class="container">
    <!-- Sign Up Form -->
    <div class="form-box"id="sign-in-form">
        <h2>Sign Up</h2>
        <form method="POST" action="form_hundler.php" >
            <input type="text" placeholder="Username" name="username" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="signUp">Sign Up</button>
            <a href="login.php"><p style="color: blue;text-align: center" id="goToLogin">Login?</p></a>
        </form>
    </div>
</div>

</body>
</html>
