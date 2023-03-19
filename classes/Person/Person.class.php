<?php

namespace Person;

class Person {

    // Properties
    public $name;
    public $age;
    public $eye_color;
    
    public static $drinking_age = 18;

    // Constructor
    public function __construct( $name, $age, $eye_color ) {
        $this->name = $name;
        $this->age = $age;
        $this->eye_color = $eye_color;
    }

    // Methods
    public function set_name( string $name ) {
        $this->name = $name;
    }

    public static function set_drinking_age( $new_drinking_age ) {
        self::$drinking_age = $new_drinking_age;
    }

    // Destructor
    public function __destruct() {
        echo '<br><hr> end...';
    }

}