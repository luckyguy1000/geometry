<?php

namespace App\Model;

class Circle
{
    public $radius;

    public function calculateArea() {
       return round(pi(), 2) * pow($this->radius, 2);
    }

    public function calculateCircumference() {
        return round(pi(), 2) * $this->radius * 2;
    }

    public function data() {
        return [
            'type' => 'circle',
            'radius' => $this->radius,
            'surface' => $this->calculateArea(),
            'circumference' => $this->calculateCircumference()
        ];
    }
}