
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/event.css">
    <link rel="stylesheet" href="../css/Club_Card.css">
    <script src="../js/navbar.js"></script>

    <title>Document</title>
</head>
<body>

    <?php include './navbar.php'; ?>
    
    <div class="main">
        <div class="card" style="margin-top: 10em;">
            <div class="block">
                <div class="left">
                    <img src="img/events_logo/636.png" alt="Club's name" width="100%" height="100%">
                </div>
                <div class="content">
                    <h2>East Techno</h2>
                    <p>Make sure to fill out your profile information before creating a new team or requesting to join a team.</p>
                </div>
            </div>
            <hr>
            <div class="icons">
                <button class="join-btn">Join us</button>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                    <span class="icon-text">MBS</span>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cpu-fill" viewBox="0 0 16 16">
                        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5"/>
                    </svg>
                    <span class="icon-text">AI</span>
                </div>
            </div>
        </div>
        <div class="teams-container">
            <div class="team">
                <div class="teamname">Team du kachir</div>
                <div class="teamcontainer">
                    <div class="teamsection" style="display: block;">
                        <div class="team-title">Members</div>
                            <div class="members">
                                <div class="member"><div class="name">Youcef Belaib</div><div class="role">Designer</div></div>
                                <div class="member"><div class="name">Hamza Fouatih</div><div class="role">Programmer</div></div>
                                <div class="member"><div class="name">Ziti Mohammed</div><div class="role">Data Analytic</div></div>
                            </div>
                    </div>
                    <div class="teamsection">
                        <div class="team-title">Demanded Roles:</div>
                        <div class="demmanded">
                            <div class="role">Designer</div>
                            <div class="role">Programmer</div>
                        </div>
                    </div>
                    <div class="teamsection">
                        <div class="team-title">Demanded Number:</div>
                        <div class="demmanded"><div class="role">2</div></div>
                    </div>
                </div>
                <button class="button">Send Invit</button>
            </div>
            <div class="team">Team 2</div>
            <div class="team">Team 3</div>
            <div class="team">Team 4</div>
        </div>
    </div>
     <?php include './footer.php'; ?>
  
</body>
</html>