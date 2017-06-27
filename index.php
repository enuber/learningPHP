<?php

    $a = 5;
    $b = 10;

    //note else is not needed as it has to be one of the first three
    if ($a == $b) {
        echo 'values are equal';
    } else if ($a < $b) {
        echo '$a is less than $b';
    } else if ($a > $b) {
        echo '$a is greater than $b';
    } else {
        echo 'values are not equal';
    }

    if ($a == $b) {
        echo ' values are equal';
    } else {
        echo ' values are NOT equal';
    }

    //this is legal says greater than or less than
    //remember that 0 is false and other numbers are true;
    if ($a <> $b) {
        echo ' values are NOT equal';
    }

    if ($a != $b) {
        echo 'values are NOT equal';
    }

    $num = 100;

    if($num >= 10) {
        if ($num <= 1000) {
            echo 'Your number is within the range';
        } else {
            echo 'Your number is greater than 1000 and not within the range';
        }
    } else {
        echo 'Your number is less than 10 and not within the range';
    }

    //You can see AND / OR instead of && ||
    if($num >= 10 && $num <= 1000) {
            echo 'Your number is within the range';
    } else {
        echo 'Your number is less than 10 and not within the range';
    }

    if($num == 10 || is_string($num)) {
        echo '10 or string';
    } else {
        echo 'not 10 or string';
    }

    //evaluates to false because (true && false)
    $var1 == true && false;
    //evaluates to true because ($var2==true) comes first. and has less presedence then =
    $var2 == true and false;

    var_dump($var1, $var2);

    switch (date('l')) {
        case 'Monday':
            echo 'Wash on Monday';
            break;
        case 'Tuesday':
            echo 'Iron on Tuesday';
            break;
        case 'Wednesday':
            echo 'Mend on Wednesday';
            break;
        default:
            echo 'I don\'t know what day it is';
            break;
    };

//            etc...

    }

?>