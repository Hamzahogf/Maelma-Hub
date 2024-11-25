<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <script src="../../js/navbar.js"></script>
    <script src="../../js/Form_validation.js" defer></script>

    <title>Register</title>
</head>
<body>
    <?php include '../navbar.php'; ?>

    <div class="container">
        <h1 class="title">Club Register</h1>
        <p class="title">WELCOME</p>
    <form class="frm2">
        <div class="form">
            <div class="box">
                <input type="text" name="name" id="name" placeholder=" ">
                <label for="email" class="floating-label">Club Name</label>
            </div>
            <div class="box">
                <select id="options" class="floating-select" required>
                    <option value="" selected></option>
                    <option value="option1">ENSIA</option>
                    <option value="option2">NHSM</option>
                    <option value="option3">ENSSA</option>
                  </select>
                <label for="options" class="floating-label">School</label>
            </div>
            <div class="box">
                <input type="email" name="email" id="email" placeholder=" ">
                <label for="email" class="floating-label">Club's Email</label>
            </div>
            <div class="box">
                <input type="password" name="password" id="password" placeholder=" ">
                <label for="password" class="floating-label">Password</label>
            </div>
            
        <button type="submit" id="submit-btn" class="submit-btn">Register</button>
        </div>
    </form>
        <div class="links notnav">
            <a href="/login.php">Already have an Account?</a>
        </div>
    </div>
    <?php include '../footer.php'; ?>

</body>
</html>