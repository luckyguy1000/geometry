<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Model\Triangle;

class TriangleController extends AbstractController
{
    public function show($a, $b, $c): JsonResponse
    {
        $triangle = new Triangle; 
        $triangle->a = $a;
        $triangle->b = $b; 
        $triangle->c = $c;

        return $this->json($triangle->data());
    }
}