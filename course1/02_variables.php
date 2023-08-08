<?php
    // php is a loosly typed language
    // the variable type is not specified, inferred

    /*
        Types
        ======
        
        - String
        - Integer
        - Float / Double
        - Boolean
        - Null
        - Array
        - Object
        - Resource
    */

    // declare variable
    // appropriate naming conditions apply
    $name = 'Daniel';
    $age = 27;
    $isMale = true;
    $height = 1.85;
    $salary = null;

    // print vars
    // use . to concatenate
    echo "name: ".$name.'<br>';
    echo "age: ".$age.'<br>';
    echo "isMale: ".$isMale.'<br>';
    echo "height: ".$height.'<br>';
    echo "Null salary: ".$salary.'<br>';

    // find the type of a variable
    echo "name is of ".gettype($name)." type".'<br>';
    echo "age is of ".gettype($age)." type".'<br>';
    echo "isMale is of ".gettype($isMale)." type".'<br>';
    echo "height is of ".gettype($height)." type".'<br>';
    echo "salary is of ".gettype($salary)." type".'<br>';

    // get more details on a particular variable
    // for debugging
    var_dump($name);
    var_dump($age);
    var_dump($isMale);
    var_dump($height);
    var_dump($salary);
    echo '<br>';

    // variable checking functions
    echo "is name variable string? :: ".is_string($name);

    // check if variable is declared
    isset($name);
    isset($james);

    // constants
    define('PI', 3.14);

    echo "PI is: ".PI.'<br>';

    // PHP built-in constants
    echo PHP_INT_MAX;
