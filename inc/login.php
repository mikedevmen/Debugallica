<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login as User</title>
   <link rel="stylesheet" href="..\styles\stylelogin.css">
   <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
</head>



<body>

<div class="container">

    <div class="form-box login">
        <form action="../index.php" method="post">
            <h1>Log In as User</h1>
            <div class="input-box">
                <h1>Account Name:</h1>
                <input type="text" name="account" placeholder="Le Mai Chi" required>
            </div>
            <div class="input-box">
                <h1>Password:</h1>
                <input type="password" placeholder="********" required>
            </div>
            <div class="register">
            <p> Don't have an account? <a href="#">Register Now</a></p> 
            </div>
            <button type="submit" value="Login" class="btn">Login</button>
        </form>
    </div>

   <div class="toggle-box">
    <a href ="index.php" class="logo"> Debugallica </a>
        <div class="toggle-panel toggle-left">
            <h1>Welcome<br>Back!</h1>
            <button class="btn manager-btn"><a href="loginmanager.php">Change to Management Page</a></button>
        </div>

   </div>
</div>
</body>
</html>