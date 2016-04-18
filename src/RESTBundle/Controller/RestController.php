<?php

namespace RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RestController extends Controller
{
    /**
     * @Route("/api")
     */
    public function indexAction()
    {
        return $this->render('RESTBundle:Default:index.html.twig');
    }
}
