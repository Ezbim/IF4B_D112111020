<?php

    $a = 30;
    $b = 30;

    $c = ++$a;
    $d = $a++;

    $e = --$b;
    $f = $b++;

    var_dump($a);
    var_dump($c);
    var_dump($d);
    var_dump($b);
    var_dump($e);
    var_dump($f);
    
?>    