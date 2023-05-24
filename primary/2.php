<?php
function sub($math, $eng, $ban){
    $sum= $math+$eng+$ban ;
    return $sum;
}

function percentage($total){
    $t=$total / 3;
    return $t;
}



echo $tot= sub(5,6,7);
echo percentage($tot) ;

echo PHP_EOL;

//Function Argument By Reference

function number(&$a){
    $a +=5 ;
    return $a;
}
function number2($b){
    $numl=+10;
}

$newNum=20;
number($newNum);
echo "total number $newNum";
echo PHP_EOL;

//Variable Functions
function abc($name){
 echo "Hello $name";
}

$func= "abc";
$func("Tanim");

$newfunc = function ($name){
    echo "Hello $name";
   };
   
   $newfunc("arefin");