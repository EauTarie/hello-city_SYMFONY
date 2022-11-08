<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /* Configuration de la page home */
    /**
     * * @Route("/", name="app_home")
     */
    public function home(): Response
    {
        /* dd(date_default_timezone_get()); */ /* Permet de dump la valeur du timezone */

        return $this->render('pages/home.html.twig');
    }

    /* Configuration de la page About */
    /**
     * * @Route("/about-us", name="app_about")
     */
    
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}

