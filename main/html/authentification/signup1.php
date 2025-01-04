<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/Form_validation.js" defer></script>
    <?php include '../../php/navbar_setup.php'; ?>
    <title>Sign up</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Sign Up</h1>
        <p class="title">WELCOME</p>
    <form class="frm3 form" action="php/authentification/signup_input.php" method="post">
        <div>
            <div class="box">
                <input type="email" name="email" id="email" placeholder=" ">
                <label for="email" class="floating-label">Email</label>
            </div>
            <div class="box">
                <input type="password" name="password" id="password" placeholder=" " required>
                <label for="password" class="floating-label">Password</label>
            </div>
            <button type="submit" id="submit-btn" class="submit-btn">Register</button>
        </div>
    </form>
        <div class="links notnav">
            <a href="html/authentification/login.php">Already have an Account?</a>
        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>

</body>
</html>