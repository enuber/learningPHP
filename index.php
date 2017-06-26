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

    $name = 'Erik';
    $string_one = 'Hello World';
    $string_two = 'Hello $name';
    //using double quotes allows variables to actually take on their value rather than just the variable name.
    $string_three = "Hello $name";

    echo $string_one;
    echo $string_two;
    echo $string_three;

    echo "\r";
    // \ is an escape character as with JS
    $string_four = "Learning to display \"Hello $name\" to the screen. \n";
    echo $string_four;

    $string_five = 'Learning to display "Hello' . $name. '" to the screen.'. "\n";
    echo $string_five;

    $string_six = 'some text here';
    $string_six .= ' some more text on another line';
    $string_six .= ' as you can see.';
    echo $string_six;


    //isReady will be first true and immediately reassigned to false.
    $isReady = true;
    $isReady = false;
    var_dump($isReady);

    //PHP juggles variable types to allow for things to make sense a number plus a string will spit out a number in this case an int.
    var_dump(1+ "2");

    $a = 10;
    $b = '10';
    //first one is true because it is just testing values second is false because it is looking at value and type which are different.
    var_dump($a == $b);
    var_dump($a === $b);

    if ($a == $b) {
       echo 'the values match';
    } else {
        echo 'the values are not the same';
    }

    //store each exercise in a string variable
    // create a variable containing the day of the week
    //use if statement to test day of week and display exercise based on that info

    $exercise1 = 'Display "Hello World"';
    $exercise2 = 'Convert Pounds To Kilograms';
    $exercise3 = 'Convert Kilograms to Pounds';
    $exercise4 = 'Convert Miles to Kilometers';
    $exercise5 = 'Convert Kilometers to Miles';
    $exericse6 = 'Month Long String of The Day';
    $exercise7 = 'String of the day with levels';
    //date() is a function for giving the date and inside it tells the function what to send back
    //a capital N returns a numeric represenation of the date 1 for Monday 2 for Tuesday etc
    $day = date('N');
    $day = 6;
    if ($day == 1) {
        echo $exercise1;
    } else if ($day == 2) {
        echo $exercise2;
    } else if ($day == 3) {
        echo $exercise3;
    } else if ($day == 4) {
        echo $exercise4;
    } else if ($day == 5) {
        echo $exercise5;
    } else if ($day == 6) {
        echo $exericse6;
    } else if ($day == 7) {
        echo $exercise7;
    }
?>

