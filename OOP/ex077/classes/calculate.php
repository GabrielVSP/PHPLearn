<?php

class Calculate {

    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, float $num1, float $num2) 
    {
        
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;

    }

    public function calculate() {

        $result = 0;

        switch ($this->operator) {

            case 'sum':
                $result = $this->num1 + $this->num2;
                break;

            case 'subtract':
                $result = $this->num1 - $this->num2;
                break;

            case 'multiply':
                $result = $this->num1 * $this->num2;
                break;

            case 'divide':
                $result = $this->num1 / $this->num2;
                break;

            default:
                return 'Error';
                break;

        }

        return number_format($result, 2, ',', '.');

    }

}