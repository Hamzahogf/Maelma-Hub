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
    <?php
        session_start();
        $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
        unset($_SESSION['error']); 
    ?>
    <title>Recover password</title>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

  <?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Recover Password</h1>
        <p class="title">Get back access to your account</p>
        <div class="form">
        <form action="php/authentification/forgotpass_handle.php" method="post" class="frm4">
            <div class="box">
                <input type="email" name="email" id="email" placeholder=" ">
                <label for="email" class="floating-label">Email</label>
            </div>
        </div>
        <div class="links">
            <a href="html/authentification/login.php">Go Back</a>
            <button class="button" id="submit-btn">Proceed</button>
        </form>
        </div>

    </div>
    </div>
    <script>
        const errorMessage = "<?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>";
        if (errorMessage) {
            let p = document.createElement('p')
            p.setAttribute('id', "errmsg")
            p.textContent=errorMessage
            p.style.color = 'red'
            p.style.fontSize = '11px'
            document.getElementById("email").parentNode.style.setProperty('margin-bottom', '4px', 'important');
            p.style.marginBottom='20px'
            document.getElementById("email").parentNode.insertAdjacentElement('afterend', p)
            setTimeout(() => {
                p.remove();
                document.getElementById("email").style.marginBottom = ''; 
            }, 4000);
        }
    </script>
    <?php include '../footer.php'; ?>

</body>
</html>