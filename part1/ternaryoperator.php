<?php
$n=10;
$num= (10==$n)? "correct" : "not coorect";
echo "$num";
echo "\n";

//evenodd
$result = ($n%2==0) ? "{$n} even num": "{$n} odd num";
echo $result;

PHP_EOL;
$n=15;


$result2= ($n%2==0) ? "A" : (($n==13) ? "B" : "not found");
echo $result2;
?>