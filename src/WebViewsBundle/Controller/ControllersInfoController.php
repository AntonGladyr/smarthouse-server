<?php

namespace WebViewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ControllersInfoController extends Controller
{
    /**
     * @Route("/power")
     */
    public function powerInfo() {
        return $this->render('WebViewsBundle:Pages:info.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'),
                'page'=>'power')
        );
    }

    /**
     * @Route("/air")
     */
    public function airInfo() {
        // Renamed
        return $this->render('WebViewsBundle:Pages:info.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'),
                'page'=>'air')
        );
    }

    /**
     * @Route("/water")
     */
    public function waterInfo() {
        return $this->render('WebViewsBundle:Pages:water.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'),
                'page'=>'water')
        );
    }
}
