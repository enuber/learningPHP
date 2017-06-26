<?php
    echo 'hello world!';

    $num_one = 1;
    $num_two = 2;
    $num_three = 3;
    echo $num_one;
    //var_dump tells you info about the data passed in. it is a function.
    var_dump($num_one);
    var_dump($num_one + $num_two - $num_three);

    $distance_home = 1.2;
    $distance_work = 2.5;

    //regardless if some variables are float and some are integers and the total is a whole number it is still a float because floats were
    //used
    var_dump($distance_home + $distance_work + $num_three + .3);

    $a = 5;
    $b = 10;

    var_dump($a * $b);
    var_dump($a/$b);

    var_dump($a + 1);
    var_dump($a);
    $a++;
    var_dump($a);
    $a--;
    var_dump($a);

    //number in pounds to convert to kg
    //floating point value for pd to kg conversion
    //then use the variables in the conversion formula to display
    //will do the same for miles

    $pound = 140;
    $lb_to_kg = 0.453592;
    $kg =  $pound * $lb_to_kg;
    echo "Weight: ";
    echo $pound;
    echo "lb = ";
    echo $kg;
    echo ' kg';

    $miles = 2.5;
    $mile_to_kilo = 1.60934;
    $kilo = $miles * $mile_to_kilo;

    echo " Distance: ";
    echo $miles;
    echo ' miles = ';
    echo $kilo;
    echo ' km';
?>