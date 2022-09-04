<?php
session_start();

foreach ([
    ['GET', $_GET],
    ['POST', $_POST],
    ['COOKIE', $_COOKIE],
    ['SESSION', $_SESSION]
] as $var) {
    echo '<b>' . $var[0] . '</b>';
    echo '<pre>';
    var_dump($var[1]);
    echo '</pre><br><br>';
}
