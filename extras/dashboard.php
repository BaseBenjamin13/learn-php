<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "<h1>welcome ${_SESSION['username']}!</h1>";
    echo '<a href="/php-crash/extras/logout.php">Loginout</a>';
} else {
    echo "<h1>welcome guest</h1>";
    echo '<a href="/php-crash/13_sessions.php">Login</a>';
}
