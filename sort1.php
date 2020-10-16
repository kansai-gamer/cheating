<?php
$list = array(10,80,45,90,1000,15,12,33);

for($j = 0; $j < count($list); $j++){
    for($k = 1; $k < count($list); $k++){
        if($list[$k - 1] > $list[$k]){
            $a = $list[$k - 1];
            $list[$k - 1] = $list[$k];
            $list[$k] = $a;
        }
    }
}

for($i = 0; $i < count($list); $i++){
    print $list[$i] . "\n";
}
?>