<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Model\Circle;

class CircleController extends AbstractController
{
    public function show($radius): JsonResponse
    {
        $circle = new Circle;
        $circle->radius = $radius;

        return $this->json($circle->data());
    }
}