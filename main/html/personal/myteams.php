<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link rel="stylesheet" href="../../css/event.css">
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
                <a href="personalinfo.php">Personal Info</a>
                <a href="myteams.php">My Teams</a>
                <a href="myclubs.php">Clubs</a>
            </div>
        </div>
        <div class="right">
        <div class="infosection two">
            <div class="title">My teams</div>
        <div class="subheading">The teams you are a member in: </div>
        <p>(You will be removed from the teams you delete)</p>
        <div class="container-teams">
            <div class="team">
                <div class="teamname">Kachir Team</div>
                <div class="teamcontainer">
                    <div class="teamsection" style="display: block;">
                        <div class="team-title">Members</div>
                            <div class="members">
                                <div class="member"><div class="name">Youcef Belaib</div><div class="role">Designer</div></div>
                                <div class="member"><div class="name">Hamza Fouatih</div><div class="role">Programmer</div></div>
                                <div class="member"><div class="name">Ziti Mohammed</div><div class="role">Data Analytic</div></div>
                            </div>
                    </div>
                </div>
                <button class="button">Delete Team</button>
            </div>
            <div class="team">
                <div class="teamname">Kachir Team</div>
                <div class="teamcontainer">
                    <div class="teamsection" style="display: block;">
                        <div class="team-title">Members</div>
                            <div class="members">
                                <div class="member"><div class="name">Youcef Belaib</div><div class="role">Designer</div></div>
                                <div class="member"><div class="name">Hamza Fouatih</div><div class="role">Programmer</div></div>
                                <div class="member"><div class="name">Ziti Mohammed</div><div class="role">Data Analytic</div></div>
                            </div>
                    </div>
                </div>
                <button class="button">Delete Team</button>
            </div>
        </div>
        </div>
        </div>
        </div></div>
        <?php include '../footer.php'; ?>

</body>
</html>
