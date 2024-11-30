<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <script src="../../js/navbar.js"></script>
    <script src="../../js/Form_validation.js"></script>
    <title>Document</title>
</head>
<body>
<?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Log In</h1>
        <p class="title">WELCOME</p>
        <div class="form">
        <div class="box">
            <input type="email" name="email" id="email" placeholder=" ">
            <label for="email" class="floating-label">Email</label>
        </div>
        <div class="box">
            <input type="password" name="password" id="password" placeholder=" ">
            <label for="password" class="floating-label">Password</label>
        </div>
        <button>LOGIN</button>
        </div>
        <div class="links">
            <a href="html/authentification/signup.php">Create Account</a>
            <a href="html/authentification/forgotpass.php">Forgot Password?</a>
        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>

  
</body>
</html>