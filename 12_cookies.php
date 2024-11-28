<?php

setcookie('name', 'Brad', time() + 86400 * 30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// unset/remove cookie
setcookie('name', '', time() - 86400);