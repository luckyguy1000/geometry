<?php

namespace App\Service;

class GeometryCalculator {

    public function sumAreas($shape1, $shape2) {
        return $shape1->calculateArea() + $shape2->calculateArea();
    }

    public function sumCircumferences($shape1, $shape2) {
        return $shape1->calculateCircumference() + $shape2->calculateCircumference();
    }
}