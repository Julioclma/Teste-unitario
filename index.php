<?php

include 'autoloader.php';


$discount = new DiscountCalculator;

var_dump(PATHINFO_ALL);
die();
echo $discount->aplly(1);