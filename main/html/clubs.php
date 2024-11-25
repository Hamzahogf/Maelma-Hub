<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js"></script>

    <title>Document</title>
</head>
<body>
<?php include './navbar.php'; ?>
    
    <div class="clubs-section">
      <h1>Get to join our clubs</h1>
      <p class="align-center">You get to join the clubs of our technological pole </p>
    </div>
    <div class="container-events">
        <div class="filter single">
        <div class="input-container single">
            <select id="options" class="floating-select" required>
              <option value="" selected></option>
              <option value="option1">ENSIA</option>
              <option value="option2">NHSM</option>
              <option value="option3">ENSSA</option>
            </select>
            <label for="options" class="floating-label">School</label>
          </div>
        </div>
        <div class="contents">
          <div class="box-container">
            <img src="img/clubs_logo/etc-logo.webp" alt="logo" class="box-logo">
            <div class="boxtitle">ENSIA Tech Community</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Web/Mob dev</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/1676733021232.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">Skill And Tell</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Soft Skills</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">ENSIA Business Entrepreneurship Club</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Business/Eutrepreneuship</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/mobius.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">MÖBIUS Club</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Math/Entertainement</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/eureka.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">EUREKA CLUB</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Math/Tech</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/gdg.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">GDG on Campus: ENSIA</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>AI/CyberSecurity</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>
        </div>
    </div>

    <?php include './footer.php'; ?>
</body>
</html>