<?php

class Calculator {

    // Properties
    private $operator;
    private $num1;
    private $num2;

    // Constructor
    public function __construct( string $chosen_operator, int $first_number, int $second_number ) {
        // Assign the arguments to the corresponding properties
        $this->operator = $chosen_operator;
        $this->num1 = $first_number;
        $this->num2 = $second_number;
    }

    // Methods
    public function calculate() {
        switch ( $this->operator ) {
            case 'add' :
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'subtract' :
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'multiply' :
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'divide' :
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            default :
                echo 'There was an error upon doing the calculation!';
                break;
        }
    }

}