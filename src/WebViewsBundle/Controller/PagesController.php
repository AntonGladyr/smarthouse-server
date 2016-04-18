<?php

namespace WebViewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/")
     */
    public function Home()
    {
        return $this->render('WebViewsBundle:Pages:home.html.twig');
    }

    /**
     * @Route("/power")
     */
    public function powerInfo() {
    	return $this->render('WebViewsBundle:Pages:power.html.twig');
    }

    /**
     * @Route("/temperature")
     */
    public function temperatureInfo() {
    	return $this->render('WebViewsBundle:Pages:temperature.html.twig');
    }

    /**
     * @Route("/water")
     */
    public function waterInfo() {
    	return $this->render('WebViewsBundle:Pages:water.html.twig');
    }

    
}
