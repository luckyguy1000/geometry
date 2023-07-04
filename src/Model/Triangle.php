<?php

namespace App\Model;

class Triangle
{
    public $a;
    public $b;
    public $c;

    public function calculateArea() {
        // Calculate half of the perimeter
        $halfPerimeter = ($this->a + $this->b + $this->c) / 2;
        
        // Calculate the area 
        $area = sqrt( 
            $halfPerimeter * 
            ($halfPerimeter - $this->a) *  
            ($halfPerimeter - $this->b) *
            ($halfPerimeter - $this->c)
        );
       
        return $area;
    }

    public function calculateCircumference() {
        return $this->a + $this->b + $this->c;  
    }

    public function data() {
        return [
            'type' => 'circle',
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'surface' => $this->calculateArea(),
            'circumference' => $this->calculateCircumference()
        ];
    }
}