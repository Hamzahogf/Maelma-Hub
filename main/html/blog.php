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
            <div class="card">
                <div class="block">
                    <div class="left">
                        <img src="img/blog/1672225598612.jpg" alt="description" width="100%" height="100%">
                    </div>
                  <div class="stmt">
                    <div class="content">
                        <h2>Mr Bachir Did it!!!</h2>
                        <p>Mr Bachir promise us that on Mars you can make another strike, as ISE DEPT sent us on tuesday a -un-official mail that there will be no Master diploma neither fablab nor PFE.</p>
                    </div>
                    <div class="detailes">
                            <p>by : Donald Trump</p>
                            <p>5 comments</p>
                            <p> 5/20/2024</p>
                         <button class="join-btn">Read more</button>
                    </div>
                  </div>
             </div> 
            </div> 
            <div class="card">
                <div class="block">
                    <div class="left">
                        <img src="img/blog/blogsample.jpg" alt="description" width="100%" height="100%">
                    </div>
                    <div class="stmt">
                    <div class="content">
                        <h2>Strike in ENSIA</h2>
                        <p>Students of the National School Of Artificial Intelligence are on a strike for their rights</p>
                    </div>
                    <div class="detailes">
                            <p>by : Donald Trump</p>
                            <p>5 comments</p>
                            <p> 5/20/2024</p>
                         <button class="join-btn">Read more</button>
                    </div>
                  </div>
                </div>
            </div>
    </div>
    </div>
    <script>
        window.blogsData = <?php echo json_encode($blogss, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
    </script>  
    <?php include './footer.php'; ?>
    </body>
    
</html>
