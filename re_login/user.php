<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
            width: 100vw;
            height: 100vh;
            background-image: url(./image/2.png);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            }
        </style>
    </head>
    <body>
        <h1> Hi <?php echo "<span style='color:red;'>".$_GET["uname"]."</span>"?>, Your email has been hacked LOL ;) <a href="./index.html">BACK</a></h1>
    </body>
</html>