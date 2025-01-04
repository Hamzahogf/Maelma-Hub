<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <link rel="stylesheet" href="../../css/drop_down.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/dropdown.js" defer></script> 
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
                <input type="text" name="name" id="name" placeholder=" " required>
                <label for="name" class="floating-label">Name</label>
            </div>
            <div class="box">
                <input type="text" name="fullname" id="fullname" placeholder=" " required>
                <label for="fullname" class="floating-label">Full Name</label>
            </div>
            <div class="box">
                <select id="options"   name="options" class="floating-select" required>
                    <option value="" selected></option>
                    <option value="1">ENSIA</option>
                    <option value="2">NHSM</option>
                    <option value="3">ENSSA</option>
                  </select>
                <label for="options" class="floating-label">School</label>
            </div>
            <div class="box">
            <div class="dropdown">
                <input type="text" id="dropdown-input" placeholder="specialities" readonly>
                <label class="floating-label">Specialities</label>
                <div class="dropdown-list" id="dropdown-list">
                <label class="dropdown-item">
                        <input type="checkbox" name="club_specialit[]" value="1"> Engineering
                    </label>
                    <label class="dropdown-item">
                        <input type="checkbox" name="club_specialit[]" value="2"> WebDev
                    </label>
                    <label class="dropdown-item">
                        <input type="checkbox" name="club_specialit[]" value="3"> AI
                    </label>
                    <label class="dropdown-item">
                        <input type="checkbox" name="club_specialit[]" value="4"> Cyber security
                    </label>
                </div>
            </div>
            </div>
            <div class="box">
                <input type="number" name="phone" id="phone" placeholder=" " required>
                <label for="phone" class="floating-label">phone</label>
            </div>

            <button type="submit" id="submit-btn" class="submit-btn">Register</button>
        </div>
    </form>
        <div class="links notnav">
            <a href="html/authentification/login.php">Already have an Account?</a>
            <a href="html/authentification/clubregister.php">Regiset new club?</a>

        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>

</body>
</html>