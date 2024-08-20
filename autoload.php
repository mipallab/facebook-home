<?php

// data file require
if (file_exists(__DIR__ . "/app/data.php")) {
    require_once(__DIR__ . "/app/data.php");
} else {
    echo "data.php file not found";
}

// function file require
if (file_exists(__DIR__ . "/app/functions.php")) {
    require_once(__DIR__ . "/app/functions.php");
} else {
    echo "functions.php file not found";
}
