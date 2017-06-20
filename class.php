<?php
class MyClass {
    public $var;

    // Constructor
    public function __construct($var) {
        echo 'Created an object of MyClass';
        $this->var = $var;
    }

    public function show_var() {
        echo $this->var;
    }
}

// Make an object
$objA = new MyClass('A');

// Call an object method to show the object's property
$objA->show_var();

// Make another object and do the same
$objB = new MyClass('B');
$objB->show_var();
?>