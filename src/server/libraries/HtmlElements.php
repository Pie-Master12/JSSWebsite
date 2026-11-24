<?php

// A collection of random modules to create the website

    function CreateSelectionBar() {
        echo '
        <header class="Topbar">
            <div class="Topbar-Left">
                <div class="Brand" aria-label="Brand">
                    <div class="Brand-Image">JSS</div>
                    <span class="Brand-Image-Text">Just Some Studio</span>
                </div>
            </div>

            <nav class="Topbar-Navigation" aria-label="Top menu">
                <a class="Navigation-Button" href="/src/public/index.php">Just Some Studio</a>
                <a class="Navigation-Button" href="/src/server/php_files/wapurpages/WapurDashboard.php">Wapur Dashboard</a>
                <a class="Navigation-Button" href="/src/server/php_files/projects/ProjectList.php">Projects</a>
                <a class="Navigation-Button" href="/src/server/php_files/announcementpages/AnnouncementList.php">Announcements</a>
                <a class="Navigation-Button" href="/src/server/php_files/jobs_and_more/MoreStuff.php">More</a>
            </nav>
        </header>
        ';
    }

    function CreateNoticeBlock($Name, $Text) {
        echo "
            <div class=\"In-Page-Notice-Block\">
                <h1 class=\"Notice-Name\">$Name</h1>

                <p class=\"Notice-Text\">
                    $Text
                </p>
            </div>
        ";
    }

?>