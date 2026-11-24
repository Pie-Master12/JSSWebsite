<?php 
require_once(__DIR__ . "/../../libraries/HtmlElements.php") ;

session_start();
if (isset($_SESSION[""])) {
    extract($_SESSION["User_Data"]);
}
if (!$_SESSION["Logged_In"] == true) {
    header("Location: ./OAuth/Oauth.php");
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>JSS: Profile</title>

        <link rel="stylesheet" href="../../../public/stylesheets/allpages/Topbar.css">
        <link rel="stylesheet" href="../../../public/stylesheets/allpages/Layout.css">
    </head>

    <body>
        <?php CreateSelectionBar(); ?>
        
        <div class="MainContent">
            
        </div>
    </body>
</html>