<?php 
$n=10;
$m=15;
if($n % 2==0){
    echo "$n is even";

}else {
    echo "$n is odd";
}
echo"\n";

//==,>,<,

if($n==$m){
    echo"same";
}
elseif($n>$m){
    echo '$n is biggest';
}elseif($n<$m){
    echo '$m is biggest';
}else{
    echo "not same";
}


//age checking

$age =50;

if($age>= 13 && $age<=21){
    echo "this is teenage";
}
else{
    echo " $age not teenage";
}
?>