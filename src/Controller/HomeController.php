<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/form-embed", name="form")
     */
    public function formAction()
    {
        return $this->render('home/form-embed.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
