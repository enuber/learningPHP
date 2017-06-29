<?php

function hello($arr)
{
    echo "<br/>";
    if (is_array($arr)) {
        foreach($arr as $name) {
            echo "<br/>";
            echo "hello, $name, how's it going";
        }
    } else {
        echo "hello, $arr";
    }
}
//allows for us to assign a default to an argument coming in similar to ES6
//you can also set an arguement to Null which means it doesn't have to be included and, doesn't have a default
function goodbye($name = 'friend') {
    echo "<br/>";
    echo "goodbye, $name, will see you later.";
}

function is_mike() {
    global $currentUser;
    echo "<br/>";
    if ($currentUser == 'Mike') {
        echo "It is Mike";
    } else {
        echo 'It is not Mike';
    }
}


hello('Erik');
$currentUser = 'Mike';
is_mike();
hello($currentUser);
$namesArray = array('George', 'Ringo', 'Bill', 'Marge');
hello($namesArray);
goodbye("mike");
goodbye();


function greeting($name) {
    if ($name) {
        return "Hello, $name";
    } else {
        return "Hello, World";
    }
}

$greeting = greeting();
echo "<br/>".$greeting;
$greeting = greeting('Mike');
echo "<br/>".$greeting;

function addUp($a, $b) {
    return $a + $b;
}
//NOTE: print_r will print keys and values of an array
echo "<br/>" . addUp(2, 5);


//this is assigning a variable a string that matches a function name
$func = 'hello';
//now when we call it like a function with () it will call the hello() function
$func();

function answer() {
    return 42;
}

$func = 'answer';
echo $func();


//anon function ends in a ; because it is assigned to a variable. If we want to use a global variable you can
//also add in "use" and then another () that can take a variable.
$name = 'friend';
$yo = function() use ($name) {
    echo "<br/> yo, $name";
};

$yo();

?>

