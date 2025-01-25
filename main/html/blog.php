<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hamza Faiz Ahmed Fouatih & Youcef Belaib">
        <meta name="description" content="Add an Event in a Club">
        <link rel="stylesheet" href="../css/Club_Card.css" type="text/css">
        <script src="../js/navbar.js" defer></script>
        <script src="../js/blogs.js" defer></script>
        <?php include '../php/blogs_setup.php'; ?>
        <?php include '../php/navbar_setup.php'; ?>
        <!--<script src="../js/blogcard_entrance.js" defer></script>-->
        <title>Blog</title>
    </head>

    <body>
    <?php include './navbar.php'; ?>
    <div class="main">
          <div style="margin: 8em auto 1em; text-align: center;" class="blogtitle">
            <h1>Always stay informed</h1>
            <p style="margin: auto;">Keep an eye on everything that's happening in our technological pole </p>
          </div>
     <div class="news">
            
    </div>
    </div>
    <script>
        window.blogsData = <?php echo json_encode($blogss, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
    </script>  
    <?php include './footer.php'; ?>
    </body>
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
</html>
