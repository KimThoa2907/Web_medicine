<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width= device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="./css/styleadmin.css">
    </head>
    <body>
       
        <div class="wrapper" style="background-color: floralwhite;">
        <?php
            include("config/config.php");
            include ("./modules/header.php");
            include ("./modules/menu.php");
            include ("./modules/main.php");
            include ("./modules/footer.php");
        ?>
        </div>
    </body>
</html>
