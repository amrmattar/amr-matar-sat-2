<?php
//Q1
$arr = ['amr','nada', 'amr','noor', 'amr','ali', 'amr'];

function getNumMatches($z){
    $y = 0;
    for($i=0;$i<count($z);$i++){
        if($z[$i]=='amr'){
            $y++;
        };
    }
    return $y;
};

$x= getNumMatches($arr);

echo 'number of repetitions='."$x".'<br>';


//Q2

function getPriceWithDiscount ($a){
    if($a>0 && $a <1000){
        $s = $a-$a/10;
    }elseif($a>=1000){
        $s = $a-$a/20;
    }
    return $s;
};

$f = getPriceWithDiscount(1900);

echo 'price after discount=' . "$f";