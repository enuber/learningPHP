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


    //notice that the array creation method is different calling array() instead of just [];
    $learn = array('conditionals','arrays','loops');
    var_dump($learn);
    //still a key value pair with 0 index
    echo $learn[1];
    //this will output the array with whatever key you give it as first arguement and the array as the second.
    echo implode(', ', $learn);
    //this will add to the end of the array. without [] it will replace the actual variable
    $learn[] = 'Build Something Awesome';
    //push method but takes array as first argument and then what you want to add in. index of current array uneffected new item is +1
    array_push($learn, 'Functions', 'Forms', 'Objects');
    //unshift adds to beginning of the array. this will also reorder the index numbers with first item being 0 etc...
    array_unshift($learn, 'HTML', 'CSS');
    //removes first element from array, it gets returned not just removed
    echo 'you removed ' . array_shift($learn);
    //removes last element from array
    echo 'you removed ' . array_pop($learn);
    //unset allows you to remove elements from other parts of the array. you can unset entire array which will destroy it.
    unset($learn[1], $learn[2]);
    //creates a new array with the array values reindexed in order, so if the list needs to be cleaned this would allow
    //you to update the index numbers.
    $learn = array_values($learn);
    //this allows you to change the value of a specific item in an array.
    $learn[0] = 'Email';
    //associative arrays
    $iceCream = array(
        'Alena'=>'Black Cherry',
        'Treasure'=> 'Chocolate',
        'Dave'=>'Cookies & Cream',
        'Rialla'=>'Strawberry');
    var_dump($iceCream);
    echo $iceCream['Alena'];
    //again array_values reorders the array, strips the original keys and replaces them in order 0...length of array-1
    $iceCream2 = array_values($iceCream);
    var_dump($iceCream2);
    //keys are case sensitive so if you set your own keys they must match when being called. if you try to set a second element
    //with the same key it will override the first. keys can be a string or integer. Floats will become an integer. booleans will
    //be 1 for true and 0 for false. a number as a string will also be converted to an integer.
    //this array will end up with only one item pointing to D because they will all be converted to 1 and that key will overwrite what
    //came before it.
    $keys = array(
        1 => 'a',
        '1' => 'b',
        1.5 => 'c',
        true => 'd'
    );
    var_dump($keys);

    //notice that arrays can actually be made with the [] you don't have to use array();
    $list[]= [
        'title' => 'Laundry',
        'priority' => 2,
        'due' => '',
        'complete' => true,
    ];
    $list[] = [
        'title' => 'Clean Out Fridge',
        'priority' => 3,
        'due' => '7/30/17',
        'complete' => false,
    ];
    var_dump($list);
    //this will access $list and give the first array in it and access the title
    echo $list[0]['title'];

    //sorting arrays
    //asort alphabetizes the values
    asort($learn);
    var_dump($learn);
    //sort alone alphabetizes by value and updates index
    sort($learn);
    var_dump($learn);
    //rsort reverses the order alphabetically.
    rsort($learn);
    var_dump($learn);
    //shuffle randomly shuffles an array
    shuffle($learn);
    var_dump($learn);
    //ksort krsort sort by key won't work if keys are letters and numbers
    ksort($learn);
    var_dump($learn);
    krsort($learn);
    var_dump($learn);

    $currentYear = date('Y');
    $year = $currentYear - 100;

    while (++$year < $currentYear) {
        echo $year . "<br />\n";
    }

    while (list($key, $val) = each($learn)) {
        echo "$key => $val<br/>\n";
    }

    $player1 = 0;
    $player2 = 0;
    $round = 0;

    while (abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
        $round++;
        echo "<h2>Round $round</h2>\n";
        //gives a random number from a min to a max. as we are looking for zero or one, it can be
        //used in an if statement as 0=false and 1=true
        if(rand(0,1)) {
            $player1++;
        } else {
            $player2++;
        }
        echo "Player 1 = $player1 <br/>\n";
        echo "Player 2 = $player2 <br/> \n";
    }
    echo"<h1>";
    if ($player1 > $player2) {
        echo "Player 1 ";
    } else {
        echo "Player 2 ";
    }
    echo "is the winner after $round rounds.";
    echo "</h1>";

    $currentYear = date('Y');
    $year = $currentYear - 100;

    for ($year; $year <= $currentYear; $year++) {
        echo $year . "<br/> \n";
    }

    $learn1[] = 'Build Something Awesome!';
    array_push($learn1, 'Functions', 'Forms', 'Objects');
    array_unshift($learn1, 'HTML', 'CSS');
    asort($learn1);
    sort($learn1);

    for ($i = 0; $i < count($learn1); $i++) {
        echo $learn1[$i] . "<br/> \n";
    }

    var_dump($list);

?>

