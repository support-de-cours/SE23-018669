<?php 

// $a = null;

// if ($a != null)
// {
//     echo "age ". $a;
// }
// else 
// {
//     echo "Age NULL";
// }


echo $b;
echo "age ". ($a ?? " is NULL");
// echo $_POST['param'] ?? "NO Param";
// $name = isset($_POST['name']) ? $_POST['name'] : null;
$name = $_POST['name'] ?? null;


$c = 42;
$d = $c ? $c : 0;
$e = $c ?: 0;