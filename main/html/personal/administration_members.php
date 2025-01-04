<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link rel="stylesheet" href="../../css/eventbox.css">
    <script src="../../js/navbar.js" defer></script>
    <?php include '../../php/personal/clubinfo_setup.php'; ?>
    <?php include '../../php/personal/administration_members_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>
    <script src="../../js/admin_member.js" defer?>
    <script src="../../js/eventbox_entrance.js" defer></script>

    <title>Adminstration</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="container">
        <div class="split">
            <div class="left">
                <img src="<?php echo htmlspecialchars($photo_src); ?>" class="pfp" alt="Profile Picture"> 
                <p class="nameprofile"><?php echo htmlspecialchars($club_name); ?></p>
                <p class="email"><?php echo htmlspecialchars($club_email); ?></p>
                <div class="links">
                    <a href="html/personal/clubinfo.php">Club Info</a>
                    <a href="html/personal/myevents.php">My Events</a>
                    <a href="html/personal/administration_members.php">members</a>
                </div>
            </div>
            <div class="right">
                    <div class="infosection three">
                        <div class="title">Members</div>
                    <div class="subheading">The administration register: </div>
                        <div class="contents">

                        </div>
                    </div>
            </div>
        </div>
    </div>

        <script>
            window.memberss = <?php echo json_encode($memberss, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
        </script>
        <script src="../main/js/admin_member.js" defer></script>
        <script src="../main/js/eventbox_entrance.js" defer></script>

    <?php include '../footer.php'; ?>
</body>
</html>
