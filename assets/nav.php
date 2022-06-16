<nav id="mySidebar" style="min-width: 815px; background-color: #ffffff;">
    <a href="index.php" class="w3-bar-item w3-button"><b>Gravesite Locator</b></a>
    <a href="history.php" class="w3-bar-item w3-button"><b>History</b></a>
    <a href="logout.php" class="w3-bar-item w3-button"><b>Logout</b></a>
    <div style="float: right;">
        <span class="w3-bar-item w3-button">
        <?php
        session_start();
        if (isset($_SESSION['user']))
        {
            echo $_SESSION['user'];
        }
        ?>
    </span>
    </div>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader" style="min-width: 815px;">
    <div class="w3-center">
        <h1 class="w3-xxxlarge w3-animate-bottom"><b>St. Patrick's Cemetery Gravesite Locator</b></h1>
        <div class="w3-padding-32">
            <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900; border-radius: 5px;">How to Use</button>
        </div>
    </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-theme-l1">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright">×</span>
            <h4><b>St. Patrick's Cemetery Gravesite Locator</b></h4>
            <h5>How to Use:</h5>
        </header>
        <div class="w3-padding">
            <p>Under the 'Gravesite Locator' tab, you can use the application to locate the exact position of a gravesite.</p>
            <p>Enter the Block (0-562), Lot (0-4), and Plot (0-6) to locate its position. The block will be highlighted directly on the map with the position inside of this block shown on the side graphic.</p>
        </div>
        <footer class="w3-container w3-theme-l1">
            <p>Trevor Osborne - CSCI 470 - 2022</p>
        </footer>
    </div>
</div>


<!-- Sanitize output text -->
<?php
function html_sanitize($input): string
{
    $input = strip_tags($input);
    $input = htmlentities($input);

    return $input;
}
?>

