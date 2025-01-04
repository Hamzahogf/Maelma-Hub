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

    <title>Recover password</title>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

  <?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Recover Password</h1>
        <p class="title">Enter new password:</p>

        <div class="box" style="margin-bottom:0">
         <form action="php/authentification/setnewpass_update.php" method="post" class="frm5">

            <input type="password" name="password" id="password" placeholder=" " required>
            <label for="password" class="floating-label">Password</label>
                    
            </div>
            <div class="links">
            <a href="html/authentification/login.php">Go Back</a>
            <button class="button" id="submit-btn">Proceed</button>
         </form>
        </div>
       
    </div>
    </div>
   
    <?php include '../footer.php'; ?>

</body>
</html>