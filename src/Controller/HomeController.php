<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }
    /**
     * @Route("/url", name="url")
     */
    public function url()
    {
        return $this->render('home/url.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
