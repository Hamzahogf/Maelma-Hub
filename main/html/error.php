
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Ooops, There was an error :(</h1>
            <p><?php echo $description ?></p>
        </div>
        <div class="links">
            <a href="<?php echo $baseurl,$redirect_url2?>">Back to home</a>
            <a href="<?php echo $baseurl,$redirect_url1?>">Login page</a>
        </div>
    </div>
</body>
<style>
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    body{
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
    }
    .container{
        width: 500px;
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    h1{
        color: rgb(72, 89, 168);
        font-weight: bold;
    }
    p{
        font-size: 1.4rem;
    }
    .links{
        width: 100%;
        display: flex;
        justify-content: space-between;
        justify-self: flex-end;
    }
    .links a{
        text-decoration: none;
        color: rgb(72, 89, 168);
        font-weight: bold;
        font-size: 1.2rem;
    }
</style>
</html>