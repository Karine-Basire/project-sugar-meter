<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsumptionController extends AbstractController
{
    /**
     * @Route("/consumption", name="consumption")
     */
    public function index(): Response
    {
        return $this->render('consumption/index.html.twig', [
            'controller_name' => 'ConsumptionController',
        ]);
    }
}
