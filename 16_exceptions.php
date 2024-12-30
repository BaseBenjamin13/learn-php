<?php

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }

    return 1/$x;
}


try {
    echo inverse(5);
    echo '<br><br>';
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception: ' . $e->getMessage(), ' ';
} finally {
    echo '</br><br>';
    echo 'first finally statement';
}