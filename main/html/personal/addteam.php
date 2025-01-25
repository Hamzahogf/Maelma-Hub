<?php
 $event_id=$_GET['event_id']
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hamza Faiz Ahmed Fouatih & Youcef Belaib">
        <meta name="description" content="Add an Event in a Club">
        <link rel="stylesheet" href="../../css/drop_down.css">
        <link rel="stylesheet" href="../../css/Add_Event.css">
        <script src="../../js/navbar.js" defer></script>
        <script src="../../js/dropdown.js" defer></script> 
     <!--   <script src="../../js/Form_validation.js" defer></script>-->
        <?php session_start(); ?>
        <?php include '../../php/personal/Add_team_setup.php'?>
        <?php include '../../php/navbar_setup.php'; ?>

        <title>Add a Team</title>

    </head>
    <body>

      <?php include '../navbar.php'; ?>
        <div class="main">
        <div class="form-container">
            <h1>Add your Team</h1>
        <form class="frm6" action="<?php echo "php/personal/Add_team_input.php?event_id=$event_id"?>" method="post">
                
            <div class="form-group">
                <div>
                    <label for="implementing_entity">Implementing Entity</label>
                    <input type="text" name="implementing_entity" value="<?php echo htmlspecialchars($username)?>" id="implementing_entity" readonly>
                </div>
                <div>
                    <label for="team_name">Team Name</label>
                    <input type="text" name="team_name" id="team_name" required>
                </div>
           
            </div>
            <div class="form-group">  
                <div class="dropdown">
                    <label for="dropdown-input">specialities needed</label>
                    <input type="text" id="dropdown-input" placeholder="" readonly>
                    <div id="dropdown-list" class="dropdown-list">
                        <label class="dropdown-item">
                        <input type="checkbox" name="team_specialit[]" value="1"> Option 1
                        </label>
                        <label class="dropdown-item">
                        <input type="checkbox" name="team_specialit[]" value="2"> Option 2
                        </label>
                        <label class="dropdown-item">
                        <input type="checkbox" name="team_specialit[]" value="3"> Option 3
                        </label>
                        <label class="dropdown-item">
                        <input type="checkbox" name="team_specialit[]" value="4"> Option 4
                        </label>
                    </div>
                </div>
                <div class="select">
                    <label for="leader_speciality">Your speciality</label>
                    <select name="leader_speciality" id="leader_speciality">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>    
            </div>

            
            <div class="form-group">
                <div>
                    <label for="team_needed">Number needed</label>
                    <input type="number" name="team_needed" min="0" max="5" id="team_needed" required>
                </div>
                <div style="visibility: hidden;">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="text" value="" readonly>
                </div>

            </div> 


            <button type="submit" id="submit-btn" class="submit-btn">Save</button>
        </form>
        
        </div>       
         <div id="customAlert" style="display:none;" class="alert-box success">
            <p id="alertMessage"></p>
        </div>

        </div>
        <?php include '../footer.php'; ?>

    </body>
</html>

