<?php 
    //datatypes & variables
    //string
    $name = 'Lakshit';

    //integer
    $age = 21;

    //boolean
    $is_best = true;

    //float
    $efficiency = 99.9;

    echo $name,$age,$is_best,$efficiency;
    var_dump($is_best);
    
    //string and variable concatenation
    echo $name . ' is ' . $age . ' years old.';

    //templating in double quotes
    echo "$name is $age years old.";
    echo "${name} is ${age} years old.";

?>
