<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hamza Faiz Ahmed Fouatih & Youcef Belaib">
        <meta name="description" content="Add an Event in a Club">
        <title>Add an Event</title>
        <link rel="stylesheet" href="../css/Add_Event.css" type="text/css">
        <script src="../js/navbar.js"></script>
        <script src="../js/Form_validation.js" defer></script>

    </head>
    <body>

      <?php include './navbar.php'; ?>

        <div class="form-container">
            <h1>Add your Event</h1>
        <form class="frm1">
                
            <div class="form-group">
                <div>
                    <label for="implementing_entity">Implementing Entity</label>
                    <input type="text" name="implementing_entity" id="implementing_entity" required>
                </div>
                <div>
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" id="event_name" required>
                </div>
           
            </div>
            <div class="form-group">

                <div>
                    <label for="event_link">Event Link</label>
                    <input type="url" name="event_link" id="event_link" pattern="[A-Za-z]+" required>
                </div>
                <div>
                    <label for="event_date">Event Date</label>
                    <input type="date" name="event_date" id="event_date" required>
                    <script>
                        document.getElementById('event_date').valueAsDate = new Date();
                      </script>
                </div>
            </div>
            <div class="form-group">
                
                <div>
                    <label for="event_location">Event Location</label>
                    <input type="text" name="event_location" id="event_location" required>
                </div>
                <div>
                    <label for="field">Field</label>
                    <input type="text" name="field" id="field" required>
                </div>
            </div>
            <div class="form-group">

                <div>
                    <label for="max_people">Max number of people</label>
                    <input type="number" name="max_people" min="2" id="max_people" required>
                </div>
                <div>
                    <label for="Prize">Prize</label>
                    <input type="text" name="Prize" id="Prize" class="prize-input" required>
                </div>
            </div>
            <div class="form-group">

                <div>
                    <label for="Participants">Participants</label>
                    <!--<input type="s" name="Prize" id="Prize" class="prize-input" required>-->
                    <select name="Participants" id="Participants" required>
                        <option value="" selected></option>
                        <option value="Club">Only the club's members</option>
                        <option value="Club">Only the school's students</option>
                        <option value="Club">All students</option>
                    </select>
                </div>
                <div style="visibility: hidden;">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
            </div>  
            <button type="submit" id="submit-btn" class="submit-btn">Save</button>
        </form>
        </div>

        <?php include './footer.php'; ?>

          
          
        
    </body>
</html>

