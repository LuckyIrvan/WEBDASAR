<?php

$first = [
    "first_name" => "LUCKY"
];

$last = [
    "last_name" => "IRVAN"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "LUCKY",
    "last_name" => "IRVAN"
];

$b = [
    "last_name" => "IRVAN",
    "first_name" => "LUCKY"
];

var_dump($a == $b);
var_dump($a === $b);