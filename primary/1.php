<?php
echo "hello";
define('PI',3.14159);
echo "\n";
echo "value of pi ".PI;
echo "\n";
echo constant('PI');
echo "\n";
$constant = 'constant';
echo "value of pi = {$constant('PI')}";
echo "\n";
$name="tanim";
$uname=strtoupper($name);
printf("my name is %s",$uname);

echo "\n";

$m=11;
$n=.20;

printf("now show  %.4f",$m);
printf("now show  %05.3f",$n);

echo "\n";

$num=12;

$number = (12 == $num) ? "twelve": "A Number";

echo PHP_EOL;

$result=($m%2==0)? "A" :(($m=10)? "B":"c");
echo $result;

echo PHP_EOL;

for($i=0 ; $i<=10;$i+=2){
    // echo $i;
    echo PHP_EOL;
    for($j=0; $j<$i; $j++){
         echo "*";
    }
}

echo PHP_EOL;

$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;

echo PHP_EOL;

for ($i=10, $j=1; $i>0 ; $i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}
echo PHP_EOL;

$k=3;
$factorial=1;
for($i=$k;  $i>1 ; $i--){
    $factorial = $factorial * $i;
}
echo $factorial.PHP_EOL;

echo PHP_EOL;