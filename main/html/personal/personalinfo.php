<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <script src="../../js/navbar.js" defer></script>
    <?php include '../../php/personal/personalinfo_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>
    <script src="../../js/update_photo.js" defer></script>
    <title>Personal</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="container">
        <div class="split">
            <div class="left">
                    <img src="<?php echo htmlspecialchars($photo_src); ?>" class="pfp" alt="Profile Picture">
                    <div class="iconn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                        <input type="file" id="profile-pic-input" accept="image/*" style="display: none;">
                    </div>
                    <p class="nameprofile"><?php echo htmlspecialchars($user_name); ?></p>
                        <p class="email"><?php echo htmlspecialchars($user_email); ?></p>
                        <div class="links">
                            <a href="html/personal/personalinfo.php">Personal Info</a>
                            <a href="html/personal/myteams.php">My Teams</a>
                            <a href="html/personal/myclubs.php">My Clubs</a>
                        </div>
            </div>
            <div class="right">
                <div class="infosection one">
                        <div class="title">Personal Informations</div>
                        <div class="subheading">Main Informations</div>
                    <form action="php/personal/personalinfo_update.php" method="post">
                        <div class="fields">
                            <div class="box modify">
                                <input value="<?php echo htmlspecialchars($user_name); ?>" class="put" type="text" name="name" readonly>
                                <label >username</label>
                                <div class="iconnn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                </div>
                            </div>
                            <div class="box modify">
                                <input value="<?php echo htmlspecialchars($user_fullname); ?>" class="put" name="fullname" readonly>
                                <label >Full Name</label>
                                <div class="iconnn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                </div>
                            </div>
                            <div class="box modify">
                                <input value="<?php echo htmlspecialchars($user_phone) ?>" name="phone" class="put" readonly>
                                <label >Phone Number</label>
                                <div class="iconnn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                </div>
                            </div>
                            <div class="box modify">
                            <select id="options" name="options" class="put floating-select" readonly>
                                    <option value="1" <?php echo $user_school == "ENSIA" ? 'selected' : ''; ?>>ENSIA</option>
                                    <option value="2" <?php echo $user_school == "NHSM" ? 'selected' : ''; ?>>NHSM</option>
                                    <option value="3" <?php echo $user_school == "ENSSA" ? 'selected' : ''; ?>>ENSSA</option>
                                </select>
                            <label for="options" class="floating-label">School</label>

                                <div class="iconnn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                </div>
                            </div>
                        </div>
                        <div class="subheading">Additional Informations</div>
                        <div class="fields">

                            <div class="box modify ">
                                <input value="<?php echo htmlspecialchars($user_specialties); ?>" name="github" class="put" readonly>
                                <label >Specialities</label>
                                    <div class="iconnn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                    </div>
                            </div> 
                                
                            <div class="box modify">
                                <input value="<?php echo htmlspecialchars($user_github ?? ''); ?>" name="github" class="put" readonly>
                                <label >Github Profile</label>
                                <div class="iconnn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg> 
                                    </div>
                            </div>

                                <!--        
                                    <div class="box">
                                        <label for="bio">Tell us more about yourself: </label>
                                        <textarea name="bio" id="bio"></textarea>
                                    </div>
                                -->
                            </div>
                            <button class="button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php include '../footer.php'; ?>

</body>
</html>

