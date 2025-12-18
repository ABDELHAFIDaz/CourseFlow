<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Sign Up</title>
    <link rel="stylesheet" href="../auth.css">
    <script src="../script.js" defer></script>
</head>
<body>

<div class="container">
    <!-- Sign Up Form -->
    <div class="form-box"id="sign-in-form">
        <h2>Sign Up</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
            <p style="color: blue;text-align: center" id="goToLogin">Login?</p>
        </form>
    </div>
    <!-- Login Form -->
    <div class="form-box hidden" id="login-form">
        <h2>Login</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p style="color: blue;text-align: center" id="goToSignUp">Sign up?</p>
        </form>
    </div>

</div>

</body>
</html>
