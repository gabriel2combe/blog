<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 *  @Route("/blog",  name="blog_")
 */
class BlogController extends AbstractController
{
    /**
    * @Route("/{page}", requirements={"page"="\d+"}, defaults={"page"=1}, name="list")
    */
    public function list($page)
    {
        return $this->render('blog/index.html.twig', [
            'page' => $page,
        ]);
    }
    /**
    * @Route("/{slug<[a-z0-9-]+>}", name="show")
    */
    public function show($slug)
    {
        return $this->render('blog/index.html.twig', [
            'slug' => ucwords(str_replace("-"," ",$slug)),
        ]);
    }
    
}
