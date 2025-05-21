<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login as Manager</title>
   <link rel="stylesheet" href="..\styles\stylelogin2.css">
   <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
</head>

<body>

    
<div class="container">

        <div class="form-box login">
            <form action="../management.php" method="get">
                <h1>Log In as Manager</h1>
                <div class="input-box">
                    <h1>Your work email:</h1>
                    <input type="email" name="admin_email" placeholder="105555880@student.swin.edu.au" required>
                </div>
                <div class="input-box">
                    <h1>Password:</h1>
                    <input type="password" placeholder="********" required>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    
       <div class="toggle-box">
        <a href ="index.php" class="logo"> Debugallica </a>
            <div class="toggle-panel toggle-left">
    
                <h1>Welcome<br>Back!</h1>
                <button class="btn manager-btn"><a href="login.php">Change to User Page </a></button>
            </div>
    
       </div>
</div>
</body>