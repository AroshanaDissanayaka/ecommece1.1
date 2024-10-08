<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Sign Up</h2>
           
                <div class="input-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="input-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="mobile">Mobile</label>
                    <input type="tel" id="mobile" name="mobile" required>
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="" onclick="signup();" class="btn">Sign Up</button>
            
            <p class="signin-link">Already have an account? <a href="signin.php">Sign in here</a></p>
        </div>
    </div>

    <script src="JS/script.js"></script>
</body>
</html>
