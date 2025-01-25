<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js" defer></script>
    <?php 
     include '../php/events_setup.php'; 
     include '../php/navbar_setup.php'; 
    ?>
    <script src="../js/events.js" defer></script>


    <title>Events</title>
</head>
<body>
  
  <?php include './navbar.php'; ?>
  <div class="main">
    <div class="clubs-section">
        <h1>Browse our latest events!</h1>
        <p class="align-center">You get to join the clubs of our technological pole </p>
      </div>
    <div class="container-events" style="margin-top: 1em;">
        <div class="filter single">
        <div class="input-container">
        <form id="school-form">

            <select id="school-select" class="floating-select" required>
            <option value=""></option>
              <option value="0" >All</option>
              <option value="1">ENSIA</option>
              <option value="2">NHSM</option>
              <option value="3">ENSSA</option>
            </select>
            <label for="school-select"  class="floating-label">School</label>
            <button id="filter-btn"  style="position: relative; right: 3em;"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859a8" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></div></button>
          </form>

        </div>
        <div class="input-container">
        <form id="club-form">

            <select id="club-select" class="floating-select" required>
            <option value=""></option>
              <option value="0" >All</option>
              <option value="21">tcha</option>
              <option value="22">SKILL</option>
            </select>
            <label for="club-select" class="floating-label">Club</label>
            <button id="filter-btn"  style="position: relative; right: 3em;"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859a8" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></div></button>
</form>
        </div>
        
        <div class="input-container">
        <form id="type-form">

            <select id="type-select" class="floating-select" required>
              <option value="" selected></option>
              <option value="1">Hackathons</option>
              <option value="2">Workshops</option>
              <option value="0">Other</option>
            </select>
            <label for="type-select" class="floating-label">Type of event</label>
            <button id="filter-btn"  style="position: relative; right: 3em;"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859a8" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></div></button>
            </form>

        </div>
        </div>

        <div class="contents">   
        </div>
    </div>
    <script>
        window.eventData = <?php echo json_encode($eventss, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
    </script>
    <script src="../main/js/eventbox_entrance.js" defer></script>
</div>
    <?php include './footer.php'; ?>

</body>
</html>