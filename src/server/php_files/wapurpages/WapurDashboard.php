<?php 

require_once(__DIR__ . "/../../libraries/HtmlElements.php");

// Session data and information
session_start();
if (isset($_SESSION["User_Data"])) {
    extract($_SESSION["User_Data"]);
}

$Avatar_Image = "";
if ($Avatar) {
    $Avatar_Image = "https://cdn.discordapp.com/avatars/$User_Id/$Avatar.jpg";
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>JSS: Wapur Dashboard</title>

        <link rel="stylesheet" href="../../../public/stylesheets/allpages/Topbar.css">
        <link rel="stylesheet" href="../../../public/stylesheets/allpages/Layout.css">
        <link rel="stylesheet" href="../../../public/stylesheets/wapurstyles/WapurDashboard.css">
    </head>

    <body>
        <?php CreateSelectionBar(); ?>
        
        <div class="MainContent">
            <aside class="Sidebar">
                <div class="Sidebar-Header">
                    <h2 class="Sidebar-Title">WAPUR</h2>
                </div>

                <nav class="Sidebar-Navigation" aria-label="Sidebar menu">
                    <a class="DashboardButton-Active" id="Dashboard">Dashboard</a>
                    <a class="DashboardButton" id="Modules">Modules</a>
                    <a class="DashboardButton" id="Analytics">Analytics</a>
                    <a class="DashboardButton" id="Logs">Logs</a>
                    <a class="DashboardButton" id="Help">Help</a>
                    <a class="DashboardButton" id="Settings">Settings</a>
                </nav>

                <a class="Sidebar-User" href="./Profile.php">
                    <div class="User-Profile-Card">
                        <img class="Avatar-Frame" src="<?php echo $Avatar_Image ?>"></img>
                        <div>
                            <strong><?php if ($Name != null || $Name != "") {echo $Name;} else {echo "Log in";} ?></strong>
                            <small><?php if ($User_Id != null && $User_Id == "969022741053341716") {echo "Developer";} else {echo "Visitor";} ?></small>
                        </div>
                    </div>
                </a>
            </aside>


            <iframe class="PageContent-IFrame" src="./dashboardsubpages/Dashboard.php"></iframe>
        </div>
    </body>

    <script src="../../../public/scripts/WapurSidebar.js"></script>
</html>