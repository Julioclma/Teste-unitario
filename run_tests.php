<?php

include 'autoloader.php';

// $discountCalculatorTest = new DiscountCalculatorTest;
$files = scandir(__DIR__);
var_dump($files);
foreach ($files as $file) {
    $exists = strpos($file, "Test");

    if ($exists) {
        $file = str_replace(".php", "", $file);
        (new $file())->execute();
    }
}
