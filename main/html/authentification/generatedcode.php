<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <script src="../../js/navbar.js" defer></script>
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
        <div class="otp">
        <form action="php/authentification/generatedcode_input.php" method="post">
        <p class="title">Enter the code sent to your email:</p>
        <div class="otpcode">
            <input type="text" maxlength="1" name="code1" required>
            <input type="text" maxlength="1" name="code2" required>
            <input type="text" maxlength="1" name="code3" required>
            <input type="text" maxlength="1" name="code4" required>
        </div>
        </div>
        <div class="links">
        <a href="html/authentification/login.php">Go Back</a>
        <button class="button">Proceed</button>
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
            p.style.marginBottom='20px'
            document.querySelector(".title").insertAdjacentElement('afterend', p)
            setTimeout(() => {
                p.remove();
            }, 3000);
        }
    </script>
    <?php include '../footer.php'; ?>

</body>
</html>