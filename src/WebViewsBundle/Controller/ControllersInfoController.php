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
        return $this->render('WebViewsBundle:Pages:power.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
    }

    /**
     * @Route("/air")
     */
    public function airInfo() {

        return $this->render('WebViewsBundle:Pages:air.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
    }

    /**
     * @Route("/water")
     */
    public function waterInfo() {
        return $this->render('WebViewsBundle:Pages:water.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
    }
}
