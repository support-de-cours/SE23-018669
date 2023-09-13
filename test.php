<?php

$name = "john doe";

$name_arr = explode(" ",$name);
$fname = ucfirst($name_arr[0]);
$lname = strtoupper($name_arr[1]);

$name = "$fname $lname";

echo $name;