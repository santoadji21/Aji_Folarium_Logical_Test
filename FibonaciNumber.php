<?php

// print fibonaci number php
for ($i = 1; $i <= 100; $i++) {
    $isFibonaci = true;
    $fibonaci = 0;
    $fibonaci1 = 1;
    $fibonaci2 = 1;
    for ($j = 2; $j < $i; $j++) {
        $fibonaci = $fibonaci1 + $fibonaci2;
        $fibonaci1 = $fibonaci2;
        $fibonaci2 = $fibonaci;
        if ($i == $fibonaci) {
            $isFibonaci = false;
            break;
        }
    }
    if ($isFibonaci) {
        echo $i . " ";
    }
}
