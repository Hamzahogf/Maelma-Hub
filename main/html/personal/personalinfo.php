<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <script src="../../js/navbar.js"></script>
    <title>Document</title>
</head>
<body>
<?php include '../navbar.php'; ?>

    <div class="container">
    <div class="split">
    <div class="left">
        <div class="pfp"><img src="img/pfp/IMG3.JPG" alt=""></div>
        <p class="nameprofile">Youcef Belaib</p>
        <p class="email">belaibyoucef3@gmail.com</p>
        <div class="links">
            <a href="html/personal/personalinfo.php">Personal Info</a>
            <a href="html/personal/myteams.php">My Teams</a>
            <a href="html/personal/myclubs.php">Clubs</a>
        </div>
    </div>
    <div class="right">
    <div class="infosection one">
        <div class="title">Personal Informations</div>
        <div class="subheading">Main Informations</div>
        <div class="fields">
            <div class="box">
                <input type="text" name="username" id="username" placeholder=" ">
                <label for="username">username</label>
            </div>
            <div class="box">
                <input type="text" name="name" placeholder=" ">
                <label for="name">Full Name</label>
            </div>
            <div class="box">
                <input type="tel" name="tel" id="tel" placeholder=" ">
                <label for="tel">Phone Number</label>
            </div>
            <div class="box">
                <select id="options" required>
                    <option value="" selected></option>
                    <option value="option1">ENSIA</option>
                    <option value="option2">NHSM</option>
                    <option value="option3">ENSSA</option>
                  </select>
                <label for="options">School</label>
            </div>
        </div>
        <div class="subheading">Additional Informations</div>
        <div class="fields">
            <div class="box">
                <input type="text" name="specialty" id="specialty" placeholder=" ">
                <label for="specialty">Specialty</label>
            </div>
            <div class="box">
                <input type="text" name="github" id="github" placeholder=" ">
                <label for="github">Github Profile</label>
            </div>
    <!--        <div class="box">
                <label for="bio">Tell us more about yourself: </label>
                <textarea name="bio" id="bio"></textarea>
            </div>-->
        </div>
        <button class="button">Save</button>
    </div>
    </div>
    </div></div>
    <?php include '../footer.php'; ?>

</body>
</html>