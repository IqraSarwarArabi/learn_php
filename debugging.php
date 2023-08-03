<?php
    //var_dump
    $name = "John";
    $age = 30;
    $colors = array("red", "green", "blue");
    var_dump($name);
    echo nl2br("\n");
    var_dump($age);
    echo nl2br("\n");
    var_dump($colors);  

    //print_r -> for array debugging details
    $person = array("name" => "Jane", "age" => 25, "city" => "New York");
    echo nl2br("\nUsing print_r(): \n");
    print_r($person);
    echo nl2br("\nUsing var_dump():\n");
    var_dump($person);
    echo nl2br("\n");

    //debug_print_backtrace -> function call track/log
    function foo() {
        bar();
    }
    function bar() {
        baz();
    }
    function baz() {
        debug_print_backtrace();
    }
    foo();
?>