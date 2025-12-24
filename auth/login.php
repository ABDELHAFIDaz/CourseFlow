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
    <div class="form-box" id="login-form">
        <h2>Login</h2>
        <form method="post" action="form_hundler.php">
            <input type="email" placeholder="email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="login">Login</button>
            <a href="sign_up.php"><p style="color: blue;text-align: center" id="goToSignUp">Sign up?</p></a>
        </form>
    </div>
</div>
</body>
</html>
