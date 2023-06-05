<?php
$color = 'black';
switch($color){
    case 'red':
        echo "red";
        break;
    case 'white':
        echo "black";
        break;
    default:
     echo "not match";
}

echo "\n";

$n =5;


switch($n%2){
    case 0:
        switch ($n){
            case $n>0:
                echo "$n is positive even number";
                break;
            case $n<0:
                echo "$n is negative even number";
                break;

        }
        break;
    default:
    switch($n){
        case $n>0:
            echo "$n is positive odd number";
            break;
        case $n<0:
            echo "$n is negative odd number";
            break;
    }
    
}

//multiple case
 switch (true){
    case($n%2==0 && $n>0):
        echo "$n is positive even number";
        break;
    case($n%2==1 && $n>0):
        echo "$n is positive odd number";
        break;
    case ($n%2==0 && $n<0):
        echo "$n is negative even number";
        break;
    case ($n%2==-1 && $n<0):
        echo "$n is negative odd number";
        break;


 }
?>