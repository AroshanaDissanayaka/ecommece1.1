<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>


 <div class="container">

       
            <h2>Sign In</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="" onclick="changeview();" class="btn">Sign In</button>
            
            <p class="register-link">No account? <a href="signup.php">Register here</a></p>
        </div>
    </div>
 
    <script src="JS/script.js"></script>
</body>
</html>