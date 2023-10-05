<?php

include 'autoloader.php';

$files = scandir(__DIR__);

foreach ($files as $file) {
    $exists = strpos($file, "Test");

    if ($exists) {
        $file = str_replace(".php", "", $file);
        (new $file())->execute();
    }
}
