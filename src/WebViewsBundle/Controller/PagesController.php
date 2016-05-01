<?php

namespace WebViewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('WebViewsBundle:Pages:home.html.twig');
    }

    /**
     * @Route("/controls")
     */
    public function controls() {
        return $this->render('WebViewsBundle:Pages:controls.html.twig');
    }

    /**
     * @Route("info")
     */
    public function allInfo() {
        return $this->render('WebViewsBundle:Pages:info.html.twig');
    }

    /**
     * @Route("/info/power")
     */
    public function powerInfo() {
    	return $this->render('WebViewsBundle:Pages:power.html.twig');
    }

    /**
     * @Route("/info/temperatures")
     */
    public function temperatureInfo() {
    	return $this->render('WebViewsBundle:Pages:temperatures.html.twig');
    }

    /**
     * @Route("/info/water")
     */
    public function waterInfo() {
    	return $this->render('WebViewsBundle:Pages:water.html.twig');
    }

    
}
