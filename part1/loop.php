<?php 
for ($i=1;$i<=10; $i++){
    echo PHP_EOL;
    // echo $i;
    for($j=0; $j<$i;$j++){
        echo "T";
    }
}

//while
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}

//do
echo PHP_EOL;
$i=0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

echo PHP_EOL;
//multiple steping
for($i=10; $i>0; $i-=1){
    echo $i.":".(10-$i);
    echo PHP_EOL;
}

echo "new \n";



//while loop
$i=0;
while($i<5){
echo $i;
echo PHP_EOL;
    $i++;
}
echo "===========\n";

$k=0;
while($k++ <5){
    echo $k;
    echo PHP_EOL;
$k++;
}
echo "===========\n";

#continue and Breack

for($i=0; $i<20; $i++){
    if($i>5){
        continue;
    
    
    echo $i;
    
}




?>