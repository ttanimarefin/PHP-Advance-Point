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

?>