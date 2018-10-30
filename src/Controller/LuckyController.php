<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */
    public function index()
    {
        return $this->render('lucky/index.html.twig', [
            'controller_name' => 'LuckyController',
        ]);
    }

    /**
     * @Route("/lucky/number", name="lucky/number")
     */
    public function number()
    {
        return $this->render('lucky/number.html.twig', [
            'controller_name' => 'LuckyController',
        ]);
    }
}
