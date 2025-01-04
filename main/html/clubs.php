<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js" defer></script>
    <script src="../js/clubs.js" defer></script>
    <?php 
    include '../php/clubs_setup.php'; 
    include '../php/navbar_setup.php'; 
    ?>
    <title>Clubs</title>
</head>

<body>
    <?php include './navbar.php'; ?>
    <div class="main">
    <div class="clubs-section">
      <h1>Get to join our clubs</h1>
      <p class="align-center">You get to join the clubs of our technological pole </p>
    </div>
    <div class="container-events">
        <div class="filter single">
         <div class="input-container single">
         <form id="search-form">
          <select id="options" name="options" class="floating-select" required>
              <option value="0" selected>All</option>
              <option  value="1">ENSIA</option>
              <option  value="2">NHSM</option>
              <option value="3">ENSSA</option>
            </select>
            <label for="options" class="floating-label">School</label>
            <button id="filter-btn"  style="position: relative; right: 3em;"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859a8" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></div></button>
          </form>
          </div>
        </div>
        <div class="contents">
          
        </div>
    </div>
    </div>

    <script>
          // Decalre global var on JS in JSON format
        window.clubsData = <?php echo json_encode($clubss, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
    </script>  
    <script src="../main/js/eventbox_entrance.js" defer></script>

    <?php include './footer.php'; ?>
</body>
</html>