<?php require_once(__DIR__ . "/../server/libraries/HtmlElements.php") ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Just Some Studio</title>

        <link rel="stylesheet" href="./stylesheets/allpages/Topbar.css">
        <link rel="stylesheet" href="./stylesheets/allpages/Layout.css">
        <link rel="stylesheet" href="./stylesheets/allpages/GeneralStyles.css">
    </head>

    <body>
        <?php 
            CreateSelectionBar(); 
            CreateNoticeBlock("Page Under Construction", 
            "Hello! Welcome to Just Some Studio's website. <br> <br>

            We are currently still developing the website and its content <br>
            If you would like to support us or help us on a project check out our \"Projects\" tab! <br> <br>

            Sorry for the inconvienence, check back another time."
            );
        ?>
    </body>
</html>