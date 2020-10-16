<?php
$s = 0;

echo "type hen";

$hen = trim(fgets(STDIN));

echo "takasa";
$high = trim(fgets(STDIN));

echo "katachi \n";
echo "shikaku = 1 \n";
echo "sankaku = 2 \n";
echo "maru = 3 \n";

$q = trim(fgets(STDIN));

if($q == 1){
   $s = $high * $hen;
}

if($q == 2){
    $s = $high * $hen / 2;
}

if($q == 3){
    $han = $hen / 2;
    $s = $han * $han * 3.14;
}

// var_dump($hen);
// var_dump($high);
// var_dump($q);
echo $s . "\n";
?>